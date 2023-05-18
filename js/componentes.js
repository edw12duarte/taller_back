class navlateral extends HTMLElement{
    constructor(){
        super();
    }

    /* PARA QUE FUNCIONE: 
    SE DEBE COLOCAR LO QUE ESTA DENTRO DEl  div, header, section,etc  
    QUE SE QUIERE  VOLVER  'componente' DE JS */


    connectedCallback(){
        this.innerHTML = `

    <style>
        .navegador{
            position: relative;
            height: 100vh;
            width: 20vw;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to left, #0F2027, #203A43, #2C5364) ;
        }
        
        .navegador .hamburguesa{
            color: rgb(193, 191, 191);
            font-size: 40px;
            font-weight: 900;
            margin: 10%;
        }
        
        .navegador .menu_bar{
            list-style: none;
            height: auto;
            width: 100%;
            margin: 5% 0;
        }
        
        .menu_bar li{
            margin: 0;
            padding: 3% 20px;
            border-bottom: 1px solid black;
            transition: all 0.5s;
        }
        
        .menu_bar li:hover{
            box-shadow: 5px 5px 10px black;
        }
        
        li a {
            text-decoration: none;
            color: rgb(190, 190, 190);
            font-size: 20px;
            font-weight: 900;
        }
        
        li a i{
            font-size: 30px;
        }
        a span{
            color: white;
            font-size: 15px;
            margin-left: 10px;
            font-weight: 300;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>



    <nav class="navegador">
            <a class="hamburguesa" href="">
                <i class="fa-solid fa-bars"></i>
            </a>
            <ul class="menu_bar">
                <li>
                    <a href="calculadora.php" >
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>Calculadora</span>
                    </a>
                </li>
                <li>
                    <a href="mayor_menor.php" >
                        <i class="fa-solid fa-stopwatch-20"></i>
                        <span>Verificar mayor o menor</span>
                    </a>
                </li>
                <li>
                    <a href="envio_datos_get.php">
                        <i class="fa-sharp fa-solid fa-paper-plane"></i>
                        <span>Envio de datos Get</span>
                    </a>
                </li>
                <li>
                    <a href="calculadora_exacta_edad.php">
                        <i class="fa-solid fa-calculator"></i>
                        <span>Calculadora exacta de edad</span>
                    </a>
                </li>
                <li>
                    <a href="llamado_bd.php">
                        <i class="fa-solid fa-database"></i>
                        <span>Insercion y mostrar BD</span>
                    </a>
                </li>
                <li>
                    <a href="actualizar_bd.php">
                        <i class="fa-solid fa-database"></i>
                        <span>Actualizar BD</span>
                    </a>
                </li>
            </ul>
        </nav>

        `;
    }
}

window.customElements.define("nav-lateral", navlateral);