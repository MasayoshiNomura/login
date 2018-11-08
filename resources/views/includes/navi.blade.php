<div class="content">
<div class="links">
<nav>
<ul>
@can('system-only') {{-- システム管理者権限のみに表示される --}}
    <li><a href="">機能１</a></li>
@elsecan('admin-higher')　{{-- 管理者権限以上に表示される --}}
    <li><a href="">機能２</a></li>
    <li><a href="">機能３</a></li>
@elsecan('user-higher') {{-- 一般権限以上に表示される --}}
    <li><a href="/employee">employee</a></li>
    <li><a href="">機能５</a></li>
    <li><a href="">機能６</a></li>
    <li><a href="">機能７</a></li>
@endcan
</nav>
</div>
</div>
