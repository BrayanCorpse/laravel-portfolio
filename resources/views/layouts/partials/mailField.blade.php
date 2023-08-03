<div class="get-in">
    <div class="empty-icon mail"><i class="icon icon-3x icon-mail"></i></div>
    <p class="empty-title h5">Get in touch</p>
</div>

<div class="send-container">
	<div class="container__item">
		<form action="{{ route('sendMail') }}" method="POST" class="form"> 
			@csrf 
			@method('POST')
			<input type="email" autocomplete="email" name="email" id="email" value="{{ old('email') }}" class="form__field" 
					placeholder="Your E-Mail Address" />
			<button type="submit" class="send-btn btn--primary btn--inside uppercase send-btn">Send</button>
		</form>
	</div>
</div>




