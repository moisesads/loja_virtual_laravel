@extends('layouts.app')

@section('title', 'Resultados dos produtos Miss Daisy')

@section('content')
<br>
<div class="container text-center">
    <div class="row">
        <div class="col-lg-6">
            <center>
                <img src="/img/logoM.png"/>
            </center> 
        </div>
        <div class="col-lg-6">
            <h3 id="texto-titulo">Resultados enviados pelos clientes</h3>            
        </div>
        <hr>
    </div>
    <div class="row">
        <!-- References: https://github.com/fancyapps/fancyBox -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

        <div class="container">
            <div class="row">
                <div class='list-group gallery'>
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos0.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos0.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div> 
                        </a>
                    </div> 
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos9.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos9.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div> 
                        </a>
                    </div> 
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos10.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos10.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div> 
                        </a>
                    </div> 
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos11.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos11.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div> 
                        </a>
                    </div>
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos4.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos4.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div>
                        </a>
                    </div> 
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos5.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos5.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div> 
                        </a>
                    </div>               
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos1.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos1.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div>
                        </a>
                    </div>
                     <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos2.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos2.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div>
                        </a>
                    </div>
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos3.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos3.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div>
                        </a>
                    </div> 
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div> <!-- text-right / end -->
                        </a>
                    </div>                     
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/img/result/fotos6.jpg">
                            <img class="img-responsive" alt="" src="/img/result/fotos6.jpg" />
                            <div class='text-right'>
                                <small class='text-muted'>Enviada pela cliente</small>
                            </div> <!-- text-right / end -->
                        </a>
                    </div>
                </div> 
            </div> 

        </div>
    </div>

 </div>
    @include('layouts.rodape')
    @endsection
