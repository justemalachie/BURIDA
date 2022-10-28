@extends('templates.app')




@section('navbar')


<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact</h2>
        <div class="contact-content">
            <div class="column left">
                <div class="text">Get in Touch</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam in aperiam atque praesentium magnam soluta amet quos perferendis vero, fuga obcaecati tempora, iste neque quasi vitae eaque voluptatum sed eius?</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title">Mudesko</div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Burida</div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title">mudesko@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column right">
                <div class="text">Message me</div>
                    <form action="" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="" id="" placeholder="name">
                            </div>
                            <div class="field email">
                                <input type="text" name="" id="" placeholder="email">
                            </div>
                        </div>
                        <div class="field subject">
                            <input type="text" name="" id="" placeholder="subject">
                        </div>
                        <div class="field textarea">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Description du sujet"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
            </div>
        </div>

</section>

@endsection