<!doctype html>
<html lang="en">

    @include('admin.includes.head')  
    
    <body>
    
        <div id="wrapper" class="admin-panel">
            @include('admin.includes.header')  

            <!-- content -->
            <div class="page-content">
                <div class="page-content-inner pt-lg-0  pr-lg-0">
                    @yield('content') 
                    @include('admin.includes.footer')  
                </div>
            </div>


    </body>
   
    @include('admin.includes.footeraddon') 
</html>