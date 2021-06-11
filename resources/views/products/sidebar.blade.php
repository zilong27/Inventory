<style>
    *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       list-style: none;
       text-decoration: none;
       font-family: 'Josefin Sans', sans-serif;
     }
     
     body{
        background-color: #f3f5f9;
     }
     
     .wrapper{
       display: flex;
       position: relative;
     }
     
     .wrapper .sidebar{
       width: 200px;
       height: 100%;
       background: #4b4276;
       padding: 30px 0px;
       position: fixed;
     }
     
     .wrapper .sidebar h2{
       color: #fff;
       text-align: center;
       margin-bottom: 30px;
     }
     
     .wrapper .sidebar ul li{
       padding: 15px;
       border-bottom: 1px solid #bdb8d7;
       border-bottom: 1px solid rgba(0,0,0,0.05);
       border-top: 1px solid rgba(255,255,255,0.05);
     }    
     
     .wrapper .sidebar ul li a{
       color: #bdb8d7;
       display: block;
     }
     .wrapper .sidebar ul ul li a{
       color: #594f8d;
       display: flex;
     }
     
     .wrapper .sidebar ul li a .fas{
       width: 25px;
     }
     
     .wrapper .sidebar ul li:hover{
       background-color: #594f8d;
     }
         
     .wrapper .sidebar ul li:hover a{
       color: #fff;
     }
      
     .wrapper .sidebar .social_media{
       position: absolute;
       bottom: 0;
       left: 50%;
       transform: translateX(-50%);
       
     }
     
     .wrapper .sidebar .social_media a{
       display: block;
       width: 40px;
       background: #594f8d;
       height: 40px;
       line-height: 45px;
       text-align: center;
       margin: 0 5px;
       color: #bdb8d7;
       border-top-left-radius: 5px;
       border-top-right-radius: 5px;
     }
     
     .wrapper .main_content{
       width: 100%;
       margin-left: 200px;
     }
     
     .wrapper .main_content .header{
       padding: 20px;
       background: #fff;
       color: #717171;
       border-bottom: 1px solid #e0e4e8;
       
       
     }
     
     .wrapper .main_content .info{
       margin: 20px;
       color: #717171;
       line-height: 25px;
     }
     
     .wrapper .main_content .info div{
       margin-bottom: 10px;
     }
     
     </style>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Inventory</title>
       <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
       <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
       <link rel="stylesheet" href="css/style.css">
   </head>
   
   <body>
   
   <div class="wrapper">
     
       <div class="sidebar">
           <h2>Inventory</h2>
           <ul>
               <li><a href="{{ route ('home') }}"><i class="fas fa-home"></i>Home</a></li>
               <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
               <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
               
            
               <li data-toggle="dropdown"  >
               <a href="{{ route ('settings.index') }}"><i class="fas fa-project-diagram"></i>Settings</a>
               </li>
               <ul class="dropdown-menu animated fadeInButtom">
                
                <li><a href="{{ route ('settings.index') }}">Manage Settings</a></li>
                 <li><a href="{{ route ('models') }}">Models</a></li>
                 <li><a href="#">Locations</a></li>
                 <li><a href="#">Suppliers</a></li>
               
                </ul>
           </ul>
           </ul> 