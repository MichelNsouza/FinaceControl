<style>
    /* Estilos podem ser adicionados aqui ou em um arquivo CSS separado */
  a{
    color: #fff;
    text-decoration: none;
  }
  }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      justify-content: space-between;
    }
    main {
        flex: 1; /* Para que o conteúdo principal ocupe o espaço restante */
    }
    header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }
    nav {
        background-color: #444;
        padding: 10px;
    }
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        text-align: center;
    }
    nav ul li {
        display: inline;
        margin-right: 20px;
    }
    section {
        padding: 20px;
        margin: 20px;
        border: 1px solid #ccc;
        flex: 1;
    }
  .fixed-footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        border-top: 1px solid #ccc;
        padding: 10px 0;
        text-align: center;
    }
  
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        width: 100%;
    }
</style>