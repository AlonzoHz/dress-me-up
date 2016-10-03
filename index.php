<html>
    <head>
        <title>Dress Alonzo Up!</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php 
            require 'connect.php';
            require 'nested_query.php';
        ?>
    </head>
    <body>
        <div id="container">
            <div id="alonzo">
                <img src="image/alonzo.png" alt="alonzo"/>
                <img src="image/shoes.png" alt="shoes" id="socks"/>
                <img src="image/shoes.png" alt="shoes" id="shoes"/>
                <img src="image/pants.png" alt="pants" id="pants"/>
                <img src="image/shirt.png" alt="shirt" id="shirt"/>
                <br/>
                <select id="clothing-types" onChange="OnDropdownChange()">
                  <option value="shirt-options">Shirts</option>
                  <option value="pant-options">Pants</option>
                  <option value="sock-options">Socks</option>
                  <option value="shoe-options">Shoes</option>
                </select>
            </div>
        </div>
        <div id="clothes">
            <div id="shirt-options">
                <img src="image/no-choice.png" alt="no choice" class="option" id="shirt0"/>
                <script>
                    var shirt0 = document.getElementById("shirt0");
                    shirt0.onclick = function() {
                        document.getElementById("shirt").style.display = "none";
                    }
                </script>
                <?php
                    $query = "SELECT * FROM clothes WHERE type='shirt'";

                    $item = 1;
                    if($query_run = mysqli_query($con, $query)) {
                        while($query_row = mysqli_fetch_assoc($query_run)) {
                            $name = $query_row['name'];
                            $image = $query_row['image'];

                            echo "<img src='$image' alt='$name' class='option' id='shirt$item'/>";
                            echo "<script>
                                      var shirt$item = document.getElementById('shirt$item');
                                      shirt$item.onclick = function() {
                                          document.getElementById('shirt').style.display = 'inline';
                                          document.getElementById('shirt').src = '$image';
                                      }
                                  </script>";
                            $item += 1;
                        }
                    }
                ?>
            </div>
            <div id="pant-options" style="display:none;">
                <img src="image/no-choice.png" alt="no choice" class="option" id="pants0"/>
                <script>
                    var pants0 = document.getElementById("pants0");
                    pants0.onclick = function() {
                        document.getElementById("pants").style.display = "none";
                    }
                </script>
                <?php
                    $query = "SELECT * FROM clothes WHERE type='pants'";

                    $item = 1;
                    if($query_run = mysqli_query($con, $query)) {
                        while($query_row = mysqli_fetch_assoc($query_run)) {
                            $name = $query_row['name'];
                            $image = $query_row['image'];

                            echo "<img src='$image' alt='$name' class='option' id='pants$item'/>";
                            echo "<script>
                                      var pants$item = document.getElementById('pants$item');
                                      pants$item.onclick = function() {
                                          document.getElementById('pants').style.display = 'inline';
                                          document.getElementById('pants').src = '$image';
                                      }
                                  </script>";

                            $item += 1;
                        }
                    }
                ?>
            </div>
            <div id="sock-options" style="display:none;">
                <img src="image/no-choice.png" alt="no choice" class="option" id="socks0"/>
                <script>
                    var socks0 = document.getElementById("socks0");
                    socks0.onclick = function() {
                        document.getElementById("socks").style.display = "none";
                    }
                </script>
                <?php
                    $query = "SELECT * FROM clothes WHERE type='socks'";

                    $item = 1;
                    if($query_run = mysqli_query($con, $query)) {
                        while($query_row = mysqli_fetch_assoc($query_run)) {
                            $name = $query_row['name'];
                            $image = $query_row['image'];

                            echo "<img src='$image' alt='$name' class='option' id='socks$item'/>";
                            echo "<script>
                                      var socks$item = document.getElementById('socks$item');
                                      socks$item.onclick = function() {
                                          document.getElementById('socks').style.display = 'inline';
                                          document.getElementById('socks').src = '$image';
                                      }
                                  </script>";

                            $item += 1;
                        }
                    }
                ?>
            </div>
            <div id="shoe-options" style="display:none;">
                <img src="image/no-choice.png" alt="no choice" class="option" id="shoes0"/>
                <script>
                    var shoes0 = document.getElementById("shoes0");
                    shoes0.onclick = function() {
                        document.getElementById("shoes").style.display = "none";
                    }
                </script>
                <?php
                    $query = "SELECT * FROM clothes WHERE type='shoes'";

                    $item = 1;
                    if($query_run = mysqli_query($con, $query)) {
                        while($query_row = mysqli_fetch_assoc($query_run)) {
                            $name = $query_row['name'];
                            $image = $query_row['image'];

                            echo "<img src='$image' alt='$name' class='option' id='shoes$item'/>";
                            echo "<script>
                                      var shoes$item = document.getElementById('shoes$item');
                                      shoes$item.onclick = function() {
                                          document.getElementById('shoes').style.display = 'inline';
                                          document.getElementById('shoes').src = '$image';
                                      }
                                  </script>";

                            $item += 1;
                        }
                    }

                    mysqli_close();
                ?>
            </div>
            <script>
                var category = "shirt-options";
                function OnDropdownChange() {
                    document.getElementById(category).style.display = "none";
                    category = document.getElementById("clothing-types").value;
                    document.getElementById(category).style.display = "block";
                }
            </script>
        <div>
    </body>
</html>