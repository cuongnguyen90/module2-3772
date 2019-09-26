<?php
/**
 *
 * Created by PhpStorm.
 * Author: Cuong.Nguyen ( @cuong.nguyen )
 * Date: September/26/19
 * Time: 14:17
 */
?>

    <!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>

@include('layouts.menu')

<div class="container">

 @yield('contents')

</div><!-- /.container -->
@include('layouts.footer')
</body>
</html>

