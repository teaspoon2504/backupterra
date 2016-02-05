@extends('layouts.main')

@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="fixed-position">
            <div class="button-tahun button-wrapper">
                <a href="#" class=""><i class="fa fa-youtube-play"></i></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    FISIKA
                </li>
                <li>
                    <a href="">tahun 2000</a>
                </li>
                <li>
                    <a href="#">tahun 2001</a>
                </li>
                <?php 
                for ($i=0; $i < 100; $i++) { 
                ?>
                <li>
                    <a href="#">tahun 2002</a>
                </li>
                <?php
                 } ?>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Sidebar right-->
        <div id="sidebar-wrapper-right" class="fixed-position">
            <div class="button-tahun button-wrapper-right">
                <a href="#" class=""><i class="fa fa-youtube-play"></i></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Tahun Matematika
                </li>
                <li>
                    <a href="">tahun 2000</a>
                </li>
                <li>
                    <a href="#">tahun 2001</a>
                </li>
                <li>
                    <a href="#">BESARAN DAN SATUAN</a>
                </li>
                
                

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header">Pendahuluan</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/QSiNWEsZGRI" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">Pendahuluan</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/QSiNWEsZGRI" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">BESARAN DAN SATUAN</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/Y_68DpUqcqU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <!-- DINAMIKA GERAK LURUS -->
                        <div class="box">
                            <div class="box-header">DINAMIKA GERAK LURUS I</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/VMFGXVoSpBs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA GERAK LURUS II</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/PfSYbNkDfjs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA GERAK LURUS III</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/KBX6eKiY4ro" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA GERAK LURUS IV</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/R5sHLj7gSf4" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA GERAK LURUS V</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/L4M8sYdmLXg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA GERAK LURUS VI</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/bssHbdzUTnI" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA GERAK LURUS VII</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/DAha3_7CXA4" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA GERAK LURUS VIII</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/lWzWbGd0KrU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <!-- DINAMIKA ROTASI -->
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI I</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/wq28CC448Xg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI II</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/b5SCOTZ52JU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI III</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/BjMalgw5Xfg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI IV</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/W-CmzO1Pib8" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI V</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/sOVFcsYauAg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI VI</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/udmNF77MpQM" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI VII</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/_4EFu49V-A0" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI VIII</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/r4AZJtFbEoo" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI IX</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/AgELhVO881o" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">DINAMIKA ROTASI X</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/dbW8nA-yzRc" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">FISIKA MODERN I</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/RvyoKZ0yxAg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN II</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/6GIjU9IYLxA" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN III</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/hWxyAOh4n9A" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN IV</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/1dJkD6RO9Ho" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN V</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/LftSXl1dQ7U" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN VI</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/vgJLhsg8NTE" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN VII</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/IDKGPW6t4ic" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN VIII</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/oB_4UIrTqKs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN IX</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/KKQy74JqN7w" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN X</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/xjXIdQ8tFsY" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN XI</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/CWWgECHpQLM" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN XII</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/vq4XPRU44a0" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN XIII</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/0sb0zSKoioE" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN XIV</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/Ae1Djo5E61w" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN XV</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/PZgBuNXn2fo" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN 16</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/i16ykvzyn-Q" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN 17</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/csX_3AuipVs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN 18</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/634yzkHeLYw" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN 19</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/SrBzb1I3I7E" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FISIKA MODERN 20</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/kPAqP_ugSps" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">FLUIDA 1</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/drj-P9TqE_g" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FLUIDA 2</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/8LBmsTc4DGs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FLUIDA 3</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/5AvIWPF-gkU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FLUIDA 4</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/v1unDUbckL0" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FLUIDA 5</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/dhmIFbx_xis" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">FLUIDA 6</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/yU7lRWuPq1Y" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 1</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/RJ3rcu7IfuM" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 2</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/Tr4S-XeeKdU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 3</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/CZ27e6TeTxs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 4</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/sZMZoZ4L-Rc" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 5</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/rTPxpM3kl7Y" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 6</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/UxK-SBzbsjw" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 7</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/G_kzwtCluTU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 8</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/7zI4jM-QPGk" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 9</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/d4yVkAr0Z4Q" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 10</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/xKW5SiGhVkA" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 11</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/ev-maba0gSE" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 12</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/cW3Qc0CpsKg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 13</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/UYpxuwJ_jZE" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 14</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/OcXEHNmxUJQ" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 15</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/bIxjVYMXs5Y" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 16</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/s-uhzImHTZg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 17</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/OfBrEWax84w" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">GETARAN,GELOMBANG, DAN BUNYI 18</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/TtALsZ46Hvs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 1</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/UA5GOm2YuBc" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 2</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/KnZKU2FaQHg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 3</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/4Ws3dN1AiAU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 4</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/ugHG3d8e9bo" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 5</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/OBXdsyP6cXQ" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 6</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/6-34WInJePg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 7</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/f9NwxZ6qZ0o" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 8</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/5kvFQ8RA-0w" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 9</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/LhD9DJqr8-g" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 10</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/GybsNKct-r0" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 11</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/N__SHei9D_I" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 12</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/PQplYVfl3Us" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">INDUKSI MAGNETIK DAN ARUS TEGANGAN BOLAK-BALIK 13</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/WQygcf0wdP4" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 1</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/UyakJC0EPVI" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 2</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/Skcu_EOrC10" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 3</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/BuPOS6PUY9E" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 4</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/vplgJ5Y4AG8" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 5</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/NRpZx4zPryg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 6</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Pnze0Ogoh70" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 7</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/To1yuoMSe4s" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 8</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/cdCjHhyKwrg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">KINEMATIKA GERAK LURUS 9</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/l10pMaHnQ2c" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">LISTRIK 1</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/XtQZH36NCK0" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 2</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/4WjxZE4xGeU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 3</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/rreDwnA5nyA" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 4</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/pjbxM0KVDXg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 5</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/PFppz3_5MDc" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 6</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/Q2GYmAd56D0" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 7</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/AIS8gUX0cos" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 8</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/I4EiU-wIJYk" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 9</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/RrIXzXdLn7I" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 10</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/6WgG180Qb8U" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 11</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/u2x-G_t44nM" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 12</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/6WgG180Qb8U" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 13</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/nn4uCwnk_yA" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 14</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/LOepxuzjhPw" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 15</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/4kt2czT28vg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 16</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/hlwKjqit0WA" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 17</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/6Ec1dr7FNP8" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 18</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/TtALsZ46Hvs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">LISTRIK 19</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/9blkipBAtgM" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">MOMENTUM DAN IMPULS 1</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/1a-gcd_VU5k" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">MOMENTUM DAN IMPULS 2</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/pP1UcsQF7lc" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">OPTIK 1</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/IRk0MPl6gjE" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 2</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/tCG_GLIDVvQ" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 3</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/_jtVbLHDb-w" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 4</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/qg2TTLW-vr0" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 5</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/4IkZ6_AFRyI" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 6</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/x3dyIFI0oic" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 7</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/K-eSP2uhv4E" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 8</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/0zk_OC2UECs" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 9</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/TNEl-W2nqbA" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 10</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/u7H7WArQanE" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 11</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/fb_sbU8yQZM" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 12</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/LLUrygYj4f4" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 13</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/fQhNZqD-F5s" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 14</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/6-lRUQp47Lo" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 15</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/zli_K-ZG-iI" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 16</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/k2msLFIet9k" frameborder="0" allowfullscreen></iframe>

                            </div> 
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">OPTIK 17</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/Y0bc10UUMzI" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 1</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/tXL5tygN41g" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 2</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/fa48ic1Gb7Q" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 3</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/-zKxP69llIE" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 4</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/2j7m57kJMlQ" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 5</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/Mz6idUJzvJ4" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 6</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/zvMNxIOqLZg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 7</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/sZMZoZ4L-Rc" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 8</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/FUAfVm78l4E" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 9</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/F3NDvJgw4H4" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 10</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/NzkULACmwug" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 11</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/uHBIhNV1xds" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 12</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/NzkULACmwug" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 13</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/9qL-gB7pdYo" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 14</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/BioKM1-N7T4" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 15</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/3sLh3T6S6iw" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 16</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/fColJ6Zlgic" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 17</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/PPhu7m1j5Dg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 18</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/EQ3sKkxsWvM" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 19</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/2SmSel_jUI8" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">SUHU DAN KALOR 20</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/3wHdluCKxEc" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>

                        <div class="box">
                            <div class="box-header">USAHA DAN ENERGI 1</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/e-_LQhyiiI8" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">USAHA DAN ENERGI 2</div>
                            <div class="box-body">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/4JK4BXfnC5c" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">USAHA DAN ENERGI 3</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/5AvIWPF-gkU" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">USAHA DAN ENERGI 4</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/xGJ5yOltLBg" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">USAHA DAN ENERGI 5</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/JM5bpzAtB5c" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box">
                            <div class="box-header">USAHA DAN ENERGI 6</div>
                            <div class="box-body">
                                <iframe width="420" height="315" src="https://www.youtube.com/embed/DAha3_7CXA4" frameborder="0" allowfullscreen></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                      

                    </div>
                    <!-- <div class="col-lg-4">
                        <div class="box">
                            <div class="box-header">Pelajaran Terkait</div>
                            <div class="box-body">
                                <iframe src="" frameborder="1"></iframe>
                                <iframe src="" frameborder="1"></iframe>
                                <iframe src="" frameborder="1"></iframe>

                            </div>
                            <div class="box-footer"></div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                                <h2>Silahkan <a href="{{ route('auth.login') }}">Log In</a> untuk melihat Video Tutorial ini</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="margin: 50px 0 0 75px">
                      <iframe width="560" height="355" src="#" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

        

</div>
    <!-- /#wrapper -->
    @stop
