@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
<?php header("Content-type: text/css"); ?>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
    position: relative;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(./images/background.png);
    background-size:cover;
    transition:0.5s;
}

.login-boxer{
  padding-right:20px;
  padding-left:20px;
  padding-bottom:35px;
  height:450px;
  width: 95%;
  position: absolute;
  top: 36%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
  background-color: rgb(53, 52, 52);
  border-radius:20px;
}
.btn_{
  border: solid #04acb4;
  display:inline-block;
  padding: 5px 20px;
  
  
  background:#04acb4;
  color:#fff;
  text-decoration: none;
  border-radius: 40px;
  font-weight: 500;
  letter-spacing: 1px;  
}
.login-boxer li{
    decoration: none;
    list-style: none;
    display:flex;
    
}
.login-boxer ul{
  position: absolute;
  margin-left:55%;
  margin-top:-30px;
  display:flex;
  justify-content:end;
  align-items: end;

}
.login-boxer ul li{
  list-style: none;
}
.login-boxer ul li a{
  display:inline-block;
  color: #fff;
  font-weight: 400;
  margin-left: 20px;
  margin-right: 2px;
  text-decoration: none;
}
.login-boxer h1{
    padding-top:20px;
    padding-right:20px;
}
.craft-table{
    margin-top:50px;
    margin-right:20px;
    
    
}
.craft-table th{
    padding:2px;
   
    font-size:15px;
    border: 1px solid #9EFFFF;
    border-radius:20px;
    margin-bottom:10px;
    
}
.total{
    font-size:12px;
    text-align: center;
    width:100px;
}
.line1{
    text-align: center;
    padding-bottom:12px;
    
    
    
}
.ed{
    margin-bottom:5px;
    margin-left:10px;
    margin-right:4px;
    border: solid 1px #04acb4;
    border-radius:20px;
    padding-left:10px;
    padding-right:10px;
    text-decoration: none;
    color: white;
}
.list_{
  list-style: none;
}
.pk{
  position:absolute;
  top:10%;
}
.ok_{
  background:#04acb4;
}
.pres_ok{
  background:white;
  color:black;
  border:solid white;
}