@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
<?php header("Content-type: text/css"); ?>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}

section{
  position: relative;
  width: 100%;
  min-height: 60rem;
  padding:100px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(./images/background.png);
  background-size:cover;
  transition:0.5s;
}
.btn{
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

header{
  position: absolute;
  top:0;
  left:0;
  width: 100%;
  padding:20px 100px;
  display:flex;
  justify-content:space-between;
  align-items: center;
}
header .logo {
  position: relative;
  max-width: 80px;
}
header ul{
  position: relative;
  display:flex;
}
header ul li{
  list-style: none;
}
header ul li a{
  display:inline-block;
  color: #fff;
  font-weight: 400;
  margin-left: 40px;
  margin-right: 50px;
  text-decoration: none;
}
.content_in{
  position: relative;
  width: 100%;
  display:flex;
  margin-bottom: 200px;
}
.content_in .textBox{
  position: relative;
  max-width:600px;
}
.content_in .textBox h1{
  color: #fff;
  font-size:2em;
  line-height: 1.5em;
  text-transform:uppercase;
  padding-bottom:20px;
}


.content_in .textBox a{
  display:inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  
  text-align: center;
  width: 200px;
  border: solid 1px #04acb4;
  color:rgb(255, 255, 255);
  text-decoration: none;
  border-radius: 40px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-color: none;
}
.content{
  position: relative;
  width: 100%;
  display:flex;
  
}
.content .textBox{
  position: relative;
  max-width:600px;
}
.content .textBox h1{
  color: #fff;
  font-size:2em;
  line-height: 1.5em;
  text-transform:uppercase;
  padding-bottom:20px;
}


.content .textBox a{
  display:inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  
  text-align: center;
  width: 200px;
  border: solid 1px #04acb4;
  color:rgb(255, 255, 255);
  text-decoration: none;
  border-radius: 40px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-color: none;
}
.btn_sub{
  margin-right: 50px;
}
.btn_subs{
  margin-right: 20px;
}
.details{
  color: #fff;
}

.container{
  max-width: 700px;
  
  width: 100%;
  
  position: absolute;
  left: calc(50% - 350px);
  margin-bottom: 10px;
    
  padding: 25px 30px;
  border-radius: 30px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);


}
.container .title{
  font-size: 10px;
  font-weight: 500;
  color: #fff;
  position: relative;
  
  
}


.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #1cdde4;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: #04acb4;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: #106f74;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
.btn_ex{
  text-align:center;
  position: relative;
  border: solid #04acb4;
  display:inline-block;
  margin-left:10px;
  background:#04acb4;
  color:#fff;
  text-decoration: none;
  border-radius: 40px;
  font-weight: 500;
  letter-spacing: 1px;  
}
.btn_cli{
  width:100px;
  margin-left:200px;
  margin-bottom: 20px;
  background:#04acb4;
  border: solid #04acb4;
  color: black;
}
.btn_pres{
  
  width:100px;
  
  
  background:#ffffff;
  border: solid #ffffff;
  color: black;
}
.btn_click{
  width:100px;
  margin-left:200px;
  margin-bottom: 20px;
  background:#ffffff;
  border: solid #ffffff;
  color: black;
}
.btn_press{
  
  width:100px;
  
  
  background:#04acb4;
  border: solid #04acb4;
  color: black;
}
.login{
  color:white;
  text-align:end;
}
.link{
  text-decoration:none;
  decoration:none;
}
.sucess_logo{
  width:250px;
  height:200px;
}
.cri{
  margin-left:30px;
}
.boxir{
  margin-bottom:50px;
}
.ok{
  border:solid #fff;
  background:#fff;
  color:black;
}
.bt_ok{
  padding-right:20px;
  padding-left:20px;
}
.bt_ok input{
  padding-right:50px;
  padding-left:50px;
}
.one{
  margin-left:43%;
}
.one_ok{
  background:white;
  color:black;
  border:solid white;
}
.one_pres{
  background:#04acb4;
  color:white;
  border:solid #04acb4;
}
.klaus{
  width:50px;
}
.ymir{
  width:610px;
  height:100px;
}
.eren{
  position:absolute;
  bottom:30%;
  left:40%;
}

.ok_2{
  width:100px;
}
.ok_on2{
  position:absolute;
  right:10%;
}
.btn_1{
  color:black;
  background-color:white;
  border:solid white;
}
.btn_0{
  color:white;
  background-color:#04acb4;
  border:solid #04acb4;
}
.vie{
  width:150px;
  font-size:8px;
}

.service{
  color:#fff;
}
.server{
  color:#fff;
  display:inline-block;
  font-size:15px;
  margin-right:19px;
  
}
.pt{
  position:abosolute;
  width:50%;
  height:50%;
}
.service{
  font-size:12px;
  display: flex;
}