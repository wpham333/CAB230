        $test=$pdo->query("SELECT memberID from members");

        foreach ($test as $i) {
            echo "fuck";
        }