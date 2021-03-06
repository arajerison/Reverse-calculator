<!DOCTYPE html>

<html>
<head>
    <title>Calculatrice </title>
    <style type="text/css" >
        h2{
            color:#00FF00;
            text-align:center;
        }
        
        label{
            margin-left: 7%;
            width: 70px;
            float: left;
            font-family: cursive;
        }
        
        #calculatrice{
            width:300px;
            height:300px;
            margin-left:auto;
            margin-right: auto;
            background-image: url("images/grey091.jpg");
        }
        
        input[type=text]{
            border: 2px solid black ;
        }
        
        #touche{
            text-align:center;
        }
            
        .touch{
            width: 35px;
            height:30px;
            margin-bottom: 10px;
            margin-right:7px;

        }
        
        .operand{
            width: 35px;
            height:30px;
            margin-bottom: 10px;
            margin-right:7px;

        }
        .clear{
            width: 35px;
            height:30px;
            margin-bottom: 10px;
            margin-right:7px;
        }
        
        input.touch{
            color: lime;
            font-family: arial;
            background-color: #000;
        }
        
        input.clear{
            color: #FFFF00;
            font-family: arial;
            background-color: #000;
        }
        
        input.operand{
            color: #FFEFD5;
            font-family: arial;
            background-color: #000;
        } 

    </style>
</head>

<body>
    <div id="calculatrice">
        <h2>REVERSE CALCULATOR</h2>
        
        <label>Entr�e:</label><input type="text" id="input" name="input" /> <br><br>
        <label>Resultat:</label><input type="text" id="result" name="result" /> <br><br><br>
        
        <div id="touche">
            <input type="button" class="touch" value="1" />
            <input type="button" class="touch" value="2" />
            <input type="button" class="touch" value="3" />
            <input type="button" class="touch" value="4" />
            <input type="button" class="touch" value="5" /> <br>
            <input type="button" class="touch" value="6" />
            <input type="button" class="touch" value="7" />
            <input type="button" class="touch" value="8" />
            <input type="button" class="touch" value="9" />
            <input type="button" class="touch" value="0" /><br>
            <input type="button" class="operand" value="+" />
            <input type="button" class="operand" value="-" />
            <input type="button" class="operand" value="*" />
            <input type="button" class="operand" value="/" />
            <input type="button" class="clear" value="C" /><br>
        </div>
    </div>    
   

<script src="http://code.jquery.com/jquery-1.11.0.js" type="text/javascript"></script>
<script src="../vue/javascript/calculatrice.js" type="text/javascript"></script>


</body>
</html>

