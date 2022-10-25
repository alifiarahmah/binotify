<div class="navbar-container">
	<div class="navbar-group">
		<div id="drawer-icon">
			<svg width="28" height="18" viewBox="0 0 28 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0.5 18H27.5V15H0.5V18ZM0.5 10.5H27.5V7.5H0.5V10.5ZM0.5 0V3H27.5V0H0.5Z" fill="#FFFFFF" />
			</svg>
		</div>
		<h1 id="logo">binotify</h1>
		<div class="input-solid search-bar">
			<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M20.5417 18.1667H19.2908L18.8475 17.7392C20.3992 15.9342 21.3333 13.5908 21.3333 11.0417C21.3333 5.3575 16.7258 0.75 11.0417 0.75C5.3575 0.75 0.75 5.3575 0.75 11.0417C0.75 16.7258 5.3575 21.3333 11.0417 21.3333C13.5908 21.3333 15.9342 20.3992 17.7392 18.8475L18.1667 19.2908V20.5417L26.0833 28.4425L28.4425 26.0833L20.5417 18.1667ZM11.0417 18.1667C7.09917 18.1667 3.91667 14.9842 3.91667 11.0417C3.91667 7.09917 7.09917 3.91667 11.0417 3.91667C14.9842 3.91667 18.1667 7.09917 18.1667 11.0417C18.1667 14.9842 14.9842 18.1667 11.0417 18.1667Z" fill="#1E1F22" />
			</svg>
			<input />
		</div>
	</div>

	<div class="navbar-group">
		<!-- TODO: bedain auth nggak -->
		<div class="auth">
			<?php if ($data['role'] == 'user') { ?>
				<button class="button-solid">log out</button>
			<?php } else { ?>
				<button>log in</button>
				<button class="button-solid">sign up</button>
			<?php } ?>
			<!-- <button class="button-solid">log out</button> -->
		</div>
		<div id="search-icon">
			<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M20.5417 18.1667H19.2908L18.8475 17.7392C20.3992 15.9342 21.3333 13.5908 21.3333 11.0417C21.3333 5.3575 16.7258 0.75 11.0417 0.75C5.3575 0.75 0.75 5.3575 0.75 11.0417C0.75 16.7258 5.3575 21.3333 11.0417 21.3333C13.5908 21.3333 15.9342 20.3992 17.7392 18.8475L18.1667 19.2908V20.5417L26.0833 28.4425L28.4425 26.0833L20.5417 18.1667ZM11.0417 18.1667C7.09917 18.1667 3.91667 14.9842 3.91667 11.0417C3.91667 7.09917 7.09917 3.91667 11.0417 3.91667C14.9842 3.91667 18.1667 7.09917 18.1667 11.0417C18.1667 14.9842 14.9842 18.1667 11.0417 18.1667Z" fill="white" />
			</svg>
		</div>
	</div>


</div>

<!-- Drawer -->
<div id="drawer"></div>