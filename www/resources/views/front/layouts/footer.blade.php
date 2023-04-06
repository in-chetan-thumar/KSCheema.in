
<footer>
    <div class="container">
        <div class="footer-detail">
            <div class="footer-img">
                <img src="{{asset('front/images/footer/Frame-4.png')}}" alt="logo">
                <p>© KS Cheema. Handcrafted with ❤ by <a href="https://www.buzzmakers.in/" target="_blank">Buzz Makers.</a></p>
            </div>
            <div class="footer-info">
                <div class="footer-home">
                    <h6>Home</h6>
                    <div class="footer-link">
                        <ul>
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('media')}}">Media</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('careers')}}">Careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-Businesses">
                    <h6>Businesses</h6>
                    <ul>
                        <li>
                            <p><a href="{{route('ourcompany')}}" target="_blank">Garnet Motors (I) Pvt. Ltd.</a></p>
                        </li>
                        <li>
                            <p><a href="/" target="_blank" data-bs-toggle="modal" data-bs-target="#website_under_development">KS Metals and Mining Industries Pvt. Ltd.</a></p>
                        </li>
                        <li>
                            <p><a href="/" target="_blank" data-bs-toggle="modal" data-bs-target="#website_under_development">Diamond Estate Builders & Developers</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copy-right footer-Businesses">
            <p>© KS Cheema. Handcrafted with ❤ by <a href="https://www.buzzmakers.in/" target="_blank">Buzz Makers.</a></p>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade carbenz" id="page_under_development" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="images-box">
                        <img src="{{asset('front/images/popup.png')}}" alt="popup">
                        <p>Page under development and will be live soon. <br>Thank you!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade carbenz" id="website_under_development" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="images-box">
                        <img src="{{asset('front/images/popup.png')}}" alt="popup">
                        <p>Our website is under development and will be live soon. <br>Thank you!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
