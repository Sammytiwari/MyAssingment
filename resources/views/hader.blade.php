 <style>
     header {
         display: flex;
         font-size: 15px;
         font-family: Arial;
         padding: 5px;
         margin-top: 30px;
     }

     span {
         margin: 30px;
     }

     .brand-name {
         font-size: 60px;
         font-weight: bold;
         margin-left: 100px;
     }

     button {
         border: none;
         font-size: 20px;
         margin-left: 100px;
     }

     h1 {
         text-align: center;
         font-size: 60px;
     }

     h3 {
         text-align: center;
         font-size: 30px;
         color: light black;
     }

     #card {
         display: grid;
         grid-template-columns: 8fr 4fr;
         margin: 50px;
         padding: 50px;
         height: 400px;
     }

     #card-body {
         background: black;
         color: white;
         width: 80%;
         height: 200px;
         text-align: center;
         font-size: 20px;

     }

     .container {
         height: 70px;
         width: 100%;
     }

     #card-header {
         height: 200px;
         width: 100%;
     }

     p {
         align: center;
         background-color: black;
         color: white;
         height: 100px
     }

     #search-box {
         display: none;
     }
 </style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>
     <header>
         <div>
             <span class="brand-name">Revel</span>
         </div>
         <div>
             <nav>
                 <span>Home</span>
                 <span>Feature</span>
                 <span>Mega menu</span>
                 <span>Documentation</span>
                 <span>Download This Template</span>
                 <button id="search-button" style="font-size:24px"><i class="fa fa-search"></i></button>
                 <div id="search-box">
                     <input type="text" placeholder="Search...">
                 </div>
             </nav>

         </div>
     </header>

     <script>
         const searchButton = document.getElementById("search-button");
         const searchBox = document.getElementById("search-box");
         const navItems = document.querySelectorAll("nav span");

         searchButton.addEventListener("click", function() {
             if (searchBox.style.display === "none" || searchBox.style.display === "") {
                 searchBox.style.display = "block";
                 searchButton.style.display = "none";
                 navItems.forEach(item => {
                     item.style.display = "none";
                 });
                 // You can add additional logic here, e.g., to focus on the search input:
                 // searchBox.querySelector("input").focus();
             } else {
                 searchBox.style.display = "none";
                 searchButton.style.display = "block";
                 navItems.forEach(item => {
                     item.style.display = "inline";
                 });
             }
         });
     </script>
