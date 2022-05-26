<li class="nav-item dropdown language-switcher">
	<ul class="lang_ul">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
        		<li>
			<a href="#">
				<img class="flag" src="/img/flags/{{$available_locale}}.png" alt="{{$locale_name}}">
			</a>
		</li>
        @else
        		<li>
				<a href="/language/{{ $available_locale }}">
					<img class="flag" src="/img/flags/{{$available_locale}}.png" alt="{{ $locale_name }}">
				</a>
			</li>
        @endif
    @endforeach
 </ul>
</li>

