<!DOCTYPE html>
<html lang="en">

<head>
				<title>Send an Email</title>
				<meta charset="UTF-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />

				<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

				<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />

				<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
								integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
								crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />

				<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />

				<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />

				<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css" />

				<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />

				<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css" />

				<link rel="stylesheet" type="text/css" href="css/util.css" />
				<link rel="stylesheet" type="text/css" href="css/main.css" />

				<meta name="robots" content="noindex, follow" />
				<script nonce="39f263ca-39bb-4928-be25-b7e6748f0fe4">
								(function(w, d) {
												!(function(a, e, t, r) {
																a.zarazData = a.zarazData || {};
																a.zarazData.executed = [];
																a.zaraz = {
																				deferred: [],
																				listeners: []
																};
																a.zaraz.q = [];
																a.zaraz._f = function(e) {
																				return function() {
																								var t = Array.prototype.slice.call(arguments);
																								a.zaraz.q.push({
																												m: e,
																												a: t
																								});
																				};
																};
																for (const e of ["track", "set", "debug"]) a.zaraz[e] = a.zaraz._f(e);
																a.zaraz.init = () => {
																				var t = e.getElementsByTagName(r)[0],
																								z = e.createElement(r),
																								n = e.getElementsByTagName("title")[0];
																				n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
																				a.zarazData.x = Math.random();
																				a.zarazData.w = a.screen.width;
																				a.zarazData.h = a.screen.height;
																				a.zarazData.j = a.innerHeight;
																				a.zarazData.e = a.innerWidth;
																				a.zarazData.l = a.location.href;
																				a.zarazData.r = e.referrer;
																				a.zarazData.k = a.screen.colorDepth;
																				a.zarazData.n = e.characterSet;
																				a.zarazData.o = new Date().getTimezoneOffset();
																				a.zarazData.q = [];
																				for (; a.zaraz.q.length;) {
																								const e = a.zaraz.q.shift();
																								a.zarazData.q.push(e);
																				}
																				z.defer = !0;
																				for (const e of [localStorage, sessionStorage])
																								Object.keys(e || {})
																								.filter((a) => a.startsWith("_zaraz_"))
																								.forEach((t) => {
																												try {
																																a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t));
																												} catch {
																																a.zarazData["z_" + t.slice(7)] = e.getItem(t);
																												}
																								});
																				z.referrerPolicy = "origin";
																				z.src =
																								"../../../cdn-cgi/zaraz/sd0d9.js?z=" +
																								btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
																				t.parentNode.insertBefore(z, t);
																};
																["complete", "interactive"].includes(e.readyState) ?
																				zaraz.init() :
																				a.addEventListener("DOMContentLoaded", zaraz.init);
												})(w, d, 0, "script");
								})(window, document);
				</script>

			
</head>

<body>
				@include('sweetalert::alert')

				<div class="container-contact100">
								<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422"
												data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
								<button class="contact100-btn-show">
												<i class="fa fa-envelope" aria-hidden="true"></i>
								</button>
								<div class="wrap-contact100">
												<button class="contact100-btn-hide">
																<i class="fa fa-close" aria-hidden="true"></i>
												</button>
												<form class="contact100-form validate-form" method="POST" action="{{ route('sendmymail') }}">
                          @csrf
																<span class="contact100-form-title">send an Email</span>
																<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Title is required">
																				<span class="label-input100">Email Title</span>
																				<input class="input100" type="text" value="" name="title" placeholder="Enter Title"
																								required id="title" />
																				<span class="focus-input100"></span>
																</div>
																<div class="wrap-input100 rs1-wrap-input100 validate-input"
																				data-validate="Valid email is required: ex@abc.xyz">
																				<span class="label-input100">Senders Email</span>
																				<input class="input100" type="text" name="sendermail" value="" required
																								placeholder="Enter your email addess" id="email" />
																				<span class="focus-input100"></span>
																</div>
																<div class="wrap-input100 rs1-wrap-input100 validate-input"
																				data-validate="Valid email is required: ex@abc.xyz">
																				<span class="label-input100">Recipients email</span>
																				<input class="input100" type="email" name="clientemail" required
																								placeholder="Enter Recipients Email" id="recemail" value="" />
																				<span class="focus-input100"></span>
																</div>
																<div class="wrap-input100 rs1-wrap-input100 validate-input"
																				data-validate="Valid email is required: ex@abc.xyz">
																				<span class="label-input100">Senders Name</span>
																				<input class="input100" type="text" name="sendername" value="" required
																								placeholder="Enter Your Name" id="email" />
																				<span class="focus-input100"></span>
																</div>

																<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Title is required">
																				<span class="label-input100">Recipients Name</span>
																				<input class="input100" type="text" value="" name="clientname"
																								placeholder="Enter Recipients Name" required id="title" />
																				<span class="focus-input100"></span>
																</div>

																<div class="wrap-input100" >
																				<span class="label-input100">Message</span>
																				<textarea class="input100" name="message" value="" required id="message"
																				    placeholder="Your message here..."></textarea>
																				<span class="focus-input100"></span>
																</div>
                                {{-- <div>
                                  <textarea name="message" id="" cols="30" rows="10"></textarea>
                                </div> --}}
																<div class="container-contact100-form-btn">
																				<button id="btn" class="contact100-form-btn">
																								<span>
																												message
																												<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
																								</span>
																				</button>
																</div>
												</form>

								</div>
				</div>
				<div id="dropDownSelect1"></div>

				<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

				<script src="vendor/animsition/js/animsition.min.js"></script>

				<script src="vendor/bootstrap/js/popper.js"></script>
				<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

				<script src="vendor/select2/select2.min.js"></script>

				<script src="vendor/daterangepicker/moment.min.js"></script>
				<script src="vendor/daterangepicker/daterangepicker.js"></script>

				<script src="vendor/countdowntime/countdowntime.js"></script>

				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
				<script src="js/map-custom.js"></script>

				<script src="js/main.js"></script>

				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
				<script>
								window.dataLayer = window.dataLayer || [];

								function gtag() {
												dataLayer.push(arguments);
								}
								gtag("js", new Date());

								gtag("config", "UA-23581568-13");
				</script>
				<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
								integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
								data-cf-beacon='{"rayId":"7566e1576da2d799","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.8.1","si":100}'
								crossorigin="anonymous"></script>
				<script>
								tinymce.init({
												selector: 'textarea',
												plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
												toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
								});
				</script>
</body>

</html>
