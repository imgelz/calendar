@extends('layouts.Halamanfrontend.contact')

@section('content')
    <section class="section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h2 style="color:#90c73e" class="contact-title">Write Something</h2>
                </div>
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <form id="form-create-contact">
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" autocomplete="off" name="subject" id="subject" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-lg-3">
                            @if(Auth::check())
                            <button type="submit" style="background:#90c73e; color:white" class="button button-contactForm">Send Message</button>
                            @else
                            @endif
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i style="color:#be0029" class="ti-home"></i></span>
                        <div class="media-body">
                        <h3 style="color:#90c73e">Bandung, West Java.</h3>
                        <p>Holis Regency, M.37A 40222</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i style="color:#be0029" class="ti-tablet"></i></span>
                        <div class="media-body">
                        <h3 style="color:#90c73e">(021) 9865 562</h3>
                        <p>Mon to Fri 9am to 5pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i  style="color:#be0029" class="ti-email"></i></span>
                        <div class="media-body">
                        <h3 style="color:#90c73e">support@smooets.com</h3>
                        <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });

            var tambah = $('#form-create-contact');
            tambah.on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/contact',
                    method: 'POST',
                    data: tambah.serialize(),
                    success: function (res) {
                        Swal.fire({
                            title: 'God Job!',
                            text: 'Send Message Successfully',
                            type: 'success',
                            showConfirmButton: false,
                            timer: 15000
                            })
                        location.reload();
                    },
                    error: function (err) {
                        console.log(err)

                        if (err.status == 422) {
                            console.log(err.responseJSON);
                            $('#success_message').fadeIn().html(err.responseJSON.message);
                            console.warn(err.responseJSON.errors);

                            $.each(err.responseJSON.errors, function (i, error) {
                                var el = $(document).find('[id="'+i+'"]');
                                el.after($('<span style="color: red;">'+error[0]+'</span>'));
                            });
                        }
                    }
                })
            })


        });
    </script>
@endsection
