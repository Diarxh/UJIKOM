<!DOCTYPE html>
<html>

<head>
    <title>SPA</title>
    <link rel="stylesheet" href="{{ asset('css/spa.css') }}">
    <style>
        #spa {
            display: flex;
            flex-direction: row;
            height: 100vh;
        }

        #sidebar {
            width: 200px;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        #sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #sidebar li {
            margin-bottom: 10px;
        }

        #sidebar a {
            color: #fff;
            text-decoration: none;
        }

        #workspace {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div id="spa">
        <div id="sidebar">
            <ul>
                <li><a href="#" data-file="dashboard">Dashboard</a></li>
                <li><a href="#" data-file="barang">Barang</a></li>
            </ul>
        </div>
        <div id="workspace">
            @yield('content')
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const workspace = document.getElementById('workspace');

            sidebar.addEventListener('click', function(event) {
                if (event.target.tagName === 'A') {
                    const file = event.target.getAttribute('data-file');
                    loadFile(file);
                }
            });

            function loadFile(file) {
                const url = `/spa/${file}`;
                fetch(url)
                    .then(response => response.text())
                    .then(content => {
                        workspace.innerHTML = content;
                    });
            }

        });
    </script>
</body>

</html>
