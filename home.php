<!DOCTYPE html>

        <head>
               
        
                <script type="text/javascript" src="jquery-1.10.2.js"></script>
                <link rel="stylesheet" href="css/960_24_col.css" type="text/css"/>
                <link rel="stylesheet" href="css/home.css" type="text/css"/>
                <link rel="stylesheet" href="css/headerfooter.css" type="text/css"/>
                <meta charset="utf-8">

        </head>

        <body>
                <div id="wrap" class="container_24">
                	<div id="header" class="grid_24">

                		  <div id="banner" class="grid_18">
                                  <a href="home.html">SEMENTARA<img src="banner.jpeg" height="300" width="600"></a>
                      </div>

                          <div id="masuk" class="grid_5">
                                 <?php
                                    session_start();
                                    if(isset($_SESSION['user']))
                                     {
                                        $username = $_SESSION['user'];
                                        echo "Hello , " .$username;
                                 ?>
                                 <a href="logout.php"> <button>Logout</button></a>
                                <?php
                                        }
                                        else {
                                ?>
                                        <form id="login" action="login.php" method="POST">
                                                <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="Akun Pengguna"><br/>
                                                <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="Kata Sandi"><br/>
                                                <input type="submit" value="Masuk">
                                        </form>
                                <?php
                                        }
                                ?>


                          </div>


                                  
                      </div>

                  
                  <div id="content" class="grid_24">

                    <div id="pencarian" class="grid_18">
                       <form id="cari" >
                        
                          <input  type="text"  placeholder="Kata Pencarian" autocomplete="off"></input>
                        
                          <input type="submit" value="Cari">
                        
                          <select id="provinsi">
                            <option value="semua-kategori">Semua provinsi</option>
                            <option value="aceh">Aceh</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            
                          </select> 

                           <select id="Kategori">
                            <option value="semua-kategori">Semua Kategori</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            
                          </select> 
                        
                       </form>

                  </div>
                    <div id="barang" class="grid_18">
                        <h2>Pilih Berdasar Kategori :</h2>
                            <div id="barang1" class="grid_4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>

                             </div>
                             <div id="barang2" class="grid_4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>

                             </div>
                             <div id="barang3" class="grid_4" >
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>

                             </div>
                             <div id="barang4" class="grid_4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>

                             </div>

                    </div>
                </div>
                    <div id="footer" class="grid_24">
                        
                                    <ul>
                                            <li><a href="#" class="grid_4"><strong>Disclaimer</strong></a></li>
                                            <li><a href="#" class="grid_4"><strong>Petunjuk</strong></a></li>
                                            <li><a href="#" class="grid_4"><strong>ABOUT US</strong></a></li>
                                    </ul>
                    
                    </div>
           </div>
        </body>

</html>
