<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Display Data</title>
    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        
        .navbar {
            background-color: #13022b; 
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }
        section {
            background-image: url('background3.jpg');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            height: 100vh; 
            display: flex; 
            flex-direction: column; 
        }

        .navbar-links {
            display: flex;
            gap: 1.5rem;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            padding: 0.5rem 1rem;
            font-family: sans-serif;
            transition: background 0.3s ease;
        }

        .navbar a:hover {
            background-color: #555;
            border-radius: 5px;
        }

        .logout-btn {
            background-color: #d9534f;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c9302c;
        }

        
        #result {
        margin: 20px auto;
        max-width: 800px;
        padding: 20px; 
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        background-color: rgba(255, 255, 255, 0.1); 
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    h2 {
        font-size: 2rem; 
        color: white; 
        margin-bottom: 20px;
    }

        
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.5); 
            border-radius: 8px; 
            overflow: hidden; 
        }

        thead {
            background-color: #333;
            color: #fff;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Error Message Styling */
        .error {
            color: #d9534f;
            font-weight: bold;
        }

        /* Link Button Styling */
        .link-btn {
            display: inline-block;
            margin: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .link-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-links">
            <a href="admin.php">All users</a>
            <a href="add.html">Add user</a>
            <a href="update.html">Update user</a>
            <a href="delete.html">Delete user</a>
        </div>
        <button class="logout-btn" onclick="logout()">Logout</button>
    </nav>

    <!-- Main Section for Result -->
    <section class="body">
        <div id="result">
            <?php
                // Include database connection
                include 'connect.php';

                // SQL query to retrieve user information
                $sql = "SELECT id,firstName, lastName, email FROM users"; // Change 'users' to your actual table name
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<h2>User Information</h2>';
                    echo '<table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>';
                    
                    // Fetch and display each row of data
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>
                                <td>' . htmlspecialchars($row['id']) . '</td>
                                <td>' . htmlspecialchars($row['firstName']) . '</td>
                                <td>' . htmlspecialchars($row['lastName']) . '</td>
                                <td>' . htmlspecialchars($row['email']) . '</td>
                              </tr>';
                    }
                    
                    echo '  </tbody>
                          </table>';
                } else {
                    echo '<p class="error">No data found.</p>';
                }

                // Close the connection
                $conn->close();
            ?>
        </div>
    </section>
    <script>
        function logout() {
            // Redirect to index.html
            window.location.href = 'home.php';
        }
    </script>
</body>
</html>
