<?php

    $hasil = mysql_query("SELECT * FROM konten", $con) or die (mysql_error());
    $row = mysql_fetch_array($hasil);


?>
<section id="mainbar">

                <div class="blog-wrapper">

                    <div class="blog-item">
                        <h1 class="blog-title">Judul</h1>
                        <div class="blog-meta">5 Oktober 2015</div>
                        <p class="blog-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque excepturi, iusto aspernatur consequatur rem omnis. Dignissimos odio sunt quas, blanditiis aperiam numquam doloribus velit commodi reiciendis officia suscipit quibusdam!
                        </p>
                        <a href="" class="blog-readmore">Read More</a>
                    </div>
                </div>
            </section>