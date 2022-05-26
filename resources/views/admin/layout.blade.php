<html lang="tk" dir="ltr"><head>
  <meta charset="utf-8">
  <meta name="_token" content="{{csrf_token()}}" />
    <title>Admin Panel</title>

{{-- <link rel="stylesheet" href="/plugins/dropzone/assets/dropzone/dropzone.min.css"> --}}
<link rel="stylesheet" href="@php
   echo asset('vendor/dropzoner/dropzone/dropzone.min.css'); @endphp">
<link href="/plugins/bootstrap_datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
<link href="/css/admin.css" rel="stylesheet">
        
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="app aside-menu-fixed sidebar-lg-show">

  <header class="app-header navbar navbar-color bg-blue border-0">
  <!-- Logo -->
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{url('/admin')}}" title="Admin Panel">
    <b>Ad</b>min
  </a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- =================================================== -->
<!-- ========== Top menu items (ordered left) ========== -->
<!-- =================================================== -->
<ul class="nav navbar-nav d-md-down-none">

            <!-- Topbar. Contains the left part -->
        <!-- This file is used to store topbar (left) items -->


    
</ul>
<!-- ========== End of top menu left items ========== -->



<!-- ========================================================= -->
<!-- ========= Top menu right items (ordered right) ========== -->
<!-- ========================================================= -->
<ul class="nav navbar-nav ml-auto ">
            <!-- Topbar. Contains the right part -->
        <!-- This file is used to store topbar (right) items -->



        <li class="nav-item dropdown pr-4">
  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="position: relative;width: 35px;height: 35px;margin: 0 10px;">
    <img class="img-avatar" src="https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&amp;d=blank&amp;r=g" alt="admin" onerror="this.style.display='none'" style="margin: 0;position: absolute;left: 0;z-index: 1;">
    <span class="backpack-avatar-menu-container" style="position: absolute;left: 0;width: 100%;background-color: #00a65a;border-radius: 50%;color: #FFF;line-height: 35px;font-size: 85%;font-weight: 300;">
      a
    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-right mr-4 pb-1 pt-1">
    <a class="dropdown-item" href="{{-- {{ url('/admin/users/' . $item->id) }} --}}"><i class="la la-user"></i> My Account</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{ url('signout') }}"><i class="la la-lock"></i> Logout</a>
  </div>
</li>
    </ul>
<!-- ========== End of top menu right items ========== -->
</header>

  <div class="app-body">

        @include('admin.sidebar')
    <div class="container">
        <div class="row">
 

        @include('admin.flash-message')
        @yield('content')
   
    </div>
  </div>



  </div><!-- ./app-body -->



      <script type="text/javascript">
    // Save default sidebar class
    let sidebarClass = (document.body.className.match(/sidebar-(sm|md|lg|xl)-show/) || ['sidebar-lg-show'])[0];
    let sidebarTransition = function(value) {
        document.querySelector('.app-body > .sidebar').style.transition = value || '';
    };

    // Recover sidebar state
    let sessionState = sessionStorage.getItem('sidebar-collapsed');
    if (sessionState) {
      // disable the transition animation temporarily, so that if you're browsing across
      // pages with the sidebar closed, the sidebar does not flicker into the view
      sidebarTransition("none");
      document.body.classList.toggle(sidebarClass, sessionState === '1');

      // re-enable the transition, so that if the user clicks the hamburger menu, it does have a nice transition
      setTimeout(sidebarTransition, 100);
    }
  </script>


<script type="text/javascript">
    // This is intentionaly run after dom loads so this way we can avoid showing duplicate alerts
    // when the user is beeing redirected by persistent table, that happens before this event triggers.
    document.onreadystatechange = function () {
        if (document.readyState == "interactive") {
            Noty.overrideDefaults({
                layout: 'topRight',
                theme: 'backstrap',
                timeout: 2500,
                closeWith: ['click', 'button'],
            });

            // get alerts from the alert bag
            var $alerts_from_php = JSON.parse('[]');

            // get the alerts from the localstorage
            var $alerts_from_localstorage = JSON.parse(localStorage.getItem('backpack_alerts'))
                ? JSON.parse(localStorage.getItem('backpack_alerts')) : {};

            // merge both php alerts and localstorage alerts
            Object.entries($alerts_from_php).forEach(function(type) {
                if(typeof $alerts_from_localstorage[type[0]] !== 'undefined') {
                    type[1].forEach(function(msg) {
                        $alerts_from_localstorage[type[0]].push(msg);
                    });
                } else {
                    $alerts_from_localstorage[type[0]] = type[1];
                }
            });

            for (var type in $alerts_from_localstorage) {
                let messages = new Set($alerts_from_localstorage[type]);

                messages.forEach(function(text) {
                    let alert = {};
                    alert['type'] = type;
                    alert['text'] = text;
                    new Noty(alert).show()
            });
            }

            // in the end, remove backpack alerts from localStorage
            localStorage.removeItem('backpack_alerts');
        }
    };
</script>

<!-- page script -->
<script type="text/javascript">

    // polyfill for `startsWith` from https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/startsWith
    if (!String.prototype.startsWith) {
    Object.defineProperty(String.prototype, 'startsWith', {
        value: function(search, rawPos) {
            var pos = rawPos > 0 ? rawPos|0 : 0;
            return this.substring(pos, pos + search.length) === search;
        }
    });
    }



    // polyfill for entries and keys from https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/entries#polyfill
    if (!Object.keys) Object.keys = function(o) {
        if (o !== Object(o))
            throw new TypeError('Object.keys called on a non-object');
        var k=[],p;
        for (p in o) if (Object.prototype.hasOwnProperty.call(o,p)) k.push(p);
        return k;
    }

    if (!Object.entries) {
        Object.entries = function( obj ){
            var ownProps = Object.keys( obj ),
                i = ownProps.length,
                resArray = new Array(i); // preallocate the Array
            while (i--)
            resArray[i] = [ownProps[i], obj[ownProps[i]]];
            return resArray;
        };
    }

    // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    
    var activeTab = $('[href="' + location.hash.replace("#", "#tab_") + '"]');
    location.hash && activeTab && activeTab.tab('show');
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        location.hash = e.target.hash.replace("#tab_", "#");
    });
</script>

    <script>


const showErrorFrame = html => {
    let page = document.createElement('html');
    page.innerHTML = html;
    page.querySelectorAll('a').forEach(a => a.setAttribute('target', '_top'));

    let modal = document.getElementById('ajax-error-frame');

    if (typeof modal !== 'undefined' && modal !== null) {
        modal.innerHTML = '';
    } else {
        modal = document.createElement('div');
        modal.id = 'ajax-error-frame';
        modal.style.position = 'fixed';
        modal.style.width = '100vw';
        modal.style.height = '100vh';
        modal.style.padding = '5vh 5vw';
        modal.style.backgroundColor = 'rgba(0, 0, 0, 0.4)';
        modal.style.zIndex = 200000;
    }

    let iframe = document.createElement('iframe');
    iframe.style.backgroundColor = '#17161A';
    iframe.style.borderRadius = '5px';
    iframe.style.width = '100%';
    iframe.style.height = '100%';
    iframe.style.border = '0';
    iframe.style.boxShadow = '0 0 4rem';
    modal.appendChild(iframe);

    document.body.prepend(modal);
    document.body.style.overflow = 'hidden';
    iframe.contentWindow.document.open();
    iframe.contentWindow.document.write(page.outerHTML);
    iframe.contentWindow.document.close();

    // Close on click
    modal.addEventListener('click', () => hideErrorFrame(modal));

    // Close on escape key press
    modal.setAttribute('tabindex', 0);
    modal.addEventListener('keydown', e => e.key === 'Escape' && hideErrorFrame(modal));
    modal.focus();
}

const hideErrorFrame = modal => {
    modal.outerHTML = '';
    document.body.style.overflow = 'visible';
}
</script>
      <script>
      // Store sidebar state
      document.querySelectorAll('.sidebar-toggler').forEach(function(toggler) {
        toggler.addEventListener('click', function() {
          sessionStorage.setItem('sidebar-collapsed', Number(!document.body.classList.contains(sidebarClass)))
          // wait for the sidebar animation to end (250ms) and then update the table headers because datatables uses a cached version
          // and dont update this values if there are dom changes after the table is draw. The sidebar toggling makes
          // the table change width, so the headers need to be adjusted accordingly.
          setTimeout(function() {
            if(typeof crud !== "undefined" && crud.table) {
              crud.table.fixedHeader.adjust();
            }
          }, 300);
        })
      });
      // Set active state on menu element
      var full_url = "{{$app->make('url')->to('/')}}";
      var $navLinks = $(".sidebar-nav li a, .app-header li a");

      // First look for an exact match including the search string
      var $curentPageLink = $navLinks.filter(
          function() { return $(this).attr('href') === full_url; }
      );

      // If not found, look for the link that starts with the url
      if(!$curentPageLink.length > 0){
          $curentPageLink = $navLinks.filter( function() {
            if ($(this).attr('href').startsWith(full_url)) {
              return true;
            }

            if (full_url.startsWith($(this).attr('href'))) {
              return true;
            }

            return false;
          });
      }

      // for the found links that can be considered current, make sure
      // - the parent item is open
      $curentPageLink.parents('li').addClass('open');
      // - the actual element is active
      $curentPageLink.each(function() {
        $(this).addClass('active');
      });
  </script>

<script src="/js/admin.js"></script>
<script src="/plugins/ckeditor/ckeditor.js"></script>
<script src="/plugins/bootstrap_datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $('.datepicker').datepicker({
    defaultViewDate: '-3d'
});
</script>
<script type="text/javascript">
    $(document).ready(function () {
      var editor = CKEDITOR.replaceAll();
        // $('.ckeditor').ckeditor();
    });
</script>
{{-- <script src="/plugins/dropzone/assets/dropzone/dropzone.min.js"></script>
<script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
</script> --}}
<script src="@php
 echo asset('vendor/dropzoner/dropzone/dropzone.min.js');
 @endphp">
 </script>

<script type="text/javascript">

  Dropzone.options.dropzoneForm = {
    maxFilesize: 2,
    parallelUploads: 3,
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

    init:function(){
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;

      submitButton.addEventListener('click', function(){
        myDropzone.processQueue();
      });

      this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
          var _this = this;
          _this.removeAllFiles();
        }
        load_images();
      });

    }

  };

  load_images();

  function load_images()
  {
    $.ajax({
      url:"{{ route('dropzone.fetch') }}",
      success:function(data)
      {
        $('#uploaded_image').html(data);
      }
    })
  }

  $(document).on('click', '.remove_image', function(){
    var name = $(this).attr('id');
    $.ajax({
      url:"{{ route('dropzone.delete') }}",
      data:{name : name},
      success:function(data){
        load_images();
      }
    })
  });

</script>

</body>
</html>