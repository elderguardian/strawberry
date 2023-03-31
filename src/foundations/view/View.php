<?php

class View {

    private string $fileName;
    private array $pageVars;

    public function __construct(string $fileName, array $pageVars)
    {
        $this->fileName = $fileName;
        $this->pageVars = $pageVars;
    }

    public function getFileName() : string {
        return $this->fileName;
    }

    public function getPageVars() : array {
        return $this->pageVars;
    }

    private function renderTemplateVars(string $file, $pageVars) : string {
        $rendered = file_get_contents("./views/$file.php");

        $templateVars = [];
        preg_match_all('/{{\s*\$\w+\s*}}/', $rendered, $templateVars);
        $templateVars = array_pop($templateVars);
        $templateVars = array_unique($templateVars);

        foreach ($templateVars as $templateVar) {
            preg_match('/\w+/', $templateVar, $var);
            $var = array_pop($var);
            $rendered = str_replace($templateVar, $pageVars[$var], $rendered);
        }

        return $rendered;
    }
    
    private function renderComponents(string $templateVarsRendered) : string
    {
        $rendered = $templateVarsRendered;

        $componentsWanted = [];
        preg_match_all('/{{\s*\w+,.*?\s*}}/', $templateVarsRendered, $componentsWanted);
        $componentsWanted = $componentsWanted[0];

        foreach ($componentsWanted as $currentComponent) {
            preg_match('/\w+,\s*.* /', $currentComponent, $componentRaw);
            $componentRaw = $componentRaw[0];
            $componentRaw = explode(',', $componentRaw);
            $componentName = $componentRaw[0];

            $componentParameters = array_slice($componentRaw, 1, sizeof($componentRaw));
            $componentParameters = implode(',', $componentParameters);
            $componentParameters = json_decode($componentParameters, true);

            $componentRendered = $this->renderTemplateVars("components/$componentName", $componentParameters);
            $rendered = str_replace($currentComponent, $componentRendered, $rendered);
        }

        return $rendered;
    }

    public function __toString(): string
    {
        $templateVarsRendered = $this->renderTemplateVars($this->fileName, $this->pageVars);
        return $this->renderComponents($templateVarsRendered);
    }


}