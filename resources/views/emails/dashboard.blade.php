<p>Bonjour {{ $user->firstname }} {{ $user->lastname }},</p>
<p>Le nouveau {{ $dashboard->month }} {{ $dashboard->year }} est disponible !</p>
<p>Vous pouvez consulter le nouveau dashboard en vous connectant sur le site <a href="{{route('dashboard', $project->id)}}">imaa.com</a>.</p>
<p>Cordialement,</p>
<p>L'équipe d'IMAA.</p>