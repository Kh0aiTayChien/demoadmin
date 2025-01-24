@extends('layouts.master')
@section('content')
<script>
      const user_token = localStorage.getItem("user_token");
      fetch('https://lab.amcolab.vn/api/v1/track_user', {
          method: 'POST',
          body: JSON.stringify({
              user_token: user_token,
          }),
          headers: { 'Content-Type': 'application/json' }
      })
      .then(response => response.json())
      .then(data => {
          console.log("API response:", data);
      });
      </script>
    This is page 3
@endsection
