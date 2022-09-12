<!DOCTYPE html>
<html>
    <head>
        <title>ESTRUTURA MVC</title>
    </head>
    <body>
        <h1>Aqui vai ficar o topo...</h1>
        <hr>

        <?= $this->loadViewInTemplate($viewName, $viewData); ?>
    </body>
</html>