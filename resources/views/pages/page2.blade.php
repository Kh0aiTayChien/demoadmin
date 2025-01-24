@extends('layouts.master')
@section('content')
    <script>
      const urlParamRender = window.location.href;
      const userTokenMatch = urlParamRender.match(/user_token=([^&]*)/);
      const user_token = userTokenMatch ? decodeURIComponent(userTokenMatch[1]) : null;
      localStorage.setItem("user_token", user_token);
      </script>
    This is page 2
@endsection
