@if (Auth::guard('web')->check())
  <p class="text-success">
    Ви увійшли як  <strong>тренер</strong>
  </p>
@endif

@if (Auth::guard('admin')->check())
  <p class="text-success">
    Ви увійшли як <strong>адміністратор</strong>
  </p>
@endif
