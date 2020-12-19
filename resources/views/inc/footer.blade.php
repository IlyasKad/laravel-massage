
         <footer >
      <div class="container">
            <div class="row">
                <div class="col-md-12  ">
                    <div class="footer ">
                             <div class="footer_nav ">

                                <p>Разделы сайта:</p>
                            <ul class="">
                                <li ><a href="#">Обратная связь</a></li>
                                <li><a href="#">Добавить анкету</a></li>
                                <li><a href="#">Регистрация </a></li>
                                <li><a href="#">Отзывы</a></li>
                                <li><a href="http://localhost/massage3/views/autorization.php ">Вход </a></li>
                            </ul>
                            </div>
<!------------------------------------------------------------------------------------------------>
                            <div class="footer_new ">
                                <p>Новые анкеты</p>

                                 <div class="new " >

        @foreach($new_anketas as $new_anketa) {


                           {{--<figure class="new_bec">--}}
                                    {{--<a href="http://localhost/">--}}
                                    {{--<img src="http://localhost/" alt="salon"></a>--}}
                            {{--</figure>--}}
                                     <figure class="new_bec">
                                         <a href="{{route('anketa',$new_anketa->id)}}">
                                             <img src="{{ asset('storage/images/'.$new_anketa->photo->path) }} " alt="salon"></a>
                                     </figure>



        @endforeach


                                 </div>
                         </div>
<!---------------------------------------------------------------------------------------------->

                            <div class="footer_сс ">

                                <p>Мы в социальных сетях:</p>

                                <ul class="cc">
                                    <li><a href="https://www.facebook.com/"><img src="http://localhost/massage3//img/socialIcon.png"></a></li>
                                    <li><a href="https://vk.com/feed"><img src="http://localhost/massage3/img/socialIcon2 (1).png"> </a></li>
                                    <li><a href="https://my.mail.ru/"><img src="http://localhost/massage3/img/socialIcon2 (2).png"></a></li>
                                    <li><a href="https://ok.ru/"><img src="http://localhost/massage3/img/socialIcon3.png"></a></li>

                                </ul>

                            </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
            <div class="copyright">
                  <p>Бесплатное размещение объявлений:частных массажистов и массажных салонов. </p>
                  <p> lux999@yandex.ru</p>
            </div>







