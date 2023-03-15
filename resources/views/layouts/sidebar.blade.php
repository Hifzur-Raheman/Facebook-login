<style>
    .menu-item-active-smp {
        color: #38424C;
        text-decoration: none;
        background: rgba(240, 90, 100, 0.2);
        border-radius: 7px;
        font-weight: 400;
        font-size: 20px;
        line-height: 30px;
        display: flex;
        align-items: center;
    }

    .sidebar-header {
        border-bottom: 1px solid white;
    }
</style>
<div class="mt-4 sidebar-wrapper" style="background: #FFFFFF !important; color:#38424C;" data-simplebar="true">
    <div class="sidebar-header" style="background: #FFFFFF !important; color:#38424C; padding-top:20px;">
        <!-- <div><img src="" class="logo-icon" alt="logo icon"></div> -->
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i></div>
    </div>

    <?php
    // $uri = service('uri'); 
    ?>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <a href="<?= url('dashboard') ?>" style="border-radius: 7px; color:#38424C;" class="<?= ((in_array(request()->segment(1), array('dashboard')))) ? 'menu-item-active-smp' : '' ?>">
            <div class="parent-icon"><i class="bx bx bx-home-circle"></i>
            </div>
            <div class="menu-title"><?= __('message.Dashboard') ?></div>
        </a>
       
        <br>
    </ul>
    <!--end navigation-->
</div>