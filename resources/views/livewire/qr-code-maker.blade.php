@push('custom_css')
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
<style type="text/css">
    body{
        background: #ffffff;
        background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .wrapper-1{
      width:100%;
      height:100vh;
      display: flex;
    flex-direction: column;
    }
    .wrapper-2{
      padding :30px;
      text-align:center;
    }
    h1{
        /*font-family: 'Kaushan Script', cursive;*/
      font-size:4em;
      letter-spacing:3px;
      color:#000 ;
      margin:0;
      margin-bottom:20px;
    }
    .wrapper-2 p{
      margin:0;
      font-size:1.3em;
      color:#000;
      /*font-family: 'Source Sans Pro', sans-serif;*/
      letter-spacing:1px;
    }
    .go-home{
      color:#fff;
      background:#000;
      border:none;
      padding:10px 50px;
      margin:30px 0;
      border-radius:30px;
      text-transform:capitalize;
      box-shadow: 0 10px 16px 1px rgb(36 36 36);
      font-size: 20px;
    }
    

    @media (min-width:360px){
      h1{
        font-size:3.5em;
      }
      .go-home{
        margin-bottom:20px;
      }
    }

    @media (min-width:600px){
      .content{
      max-width:1000px;
      margin:0 auto;
    }
      .wrapper-1{
      height: initial;
      max-width:620px;
      margin:0 auto;
      margin-top:50px;
      box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
    }
      
    }
    @media (max-width: 768px){
        svg:not(:root) {
             height:auto; 
        }
    }
</style>
@endpush
<section class="page-main-content section-padding">
    <div class=content>
        <div class="wrapper-1">

            <div class="wrapper-2">
                
                
                
                    
                    <div>
                        <?php
                        $from = [33, 37, 41];
                        $to = [0, 0, 0];
                        ?>
                        {{QrCode::size(550)
                        ->style('square')
                        ->eye('circle')
                        ->gradient($from[0], $from[1], $from[2], $to[0], $to[1], $to[2], 'diagonal')
                        ->margin(1)
                        ->generate('https://wa.me/+971521329216')}}
                    </div>
                    
                    
                
                
            </div>
            
        </div>
    </div>
</section>




@push('custom_script')
@endpush