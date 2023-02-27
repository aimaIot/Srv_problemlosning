<html>
<link rel="stylesheet" href="style.css">

<head>

</head>

<body>
    <div class="overlay">
        <form class="chessboard" method="POST">
                <?php
        $letters = ["a", "b", "c", "d", "e", "f", "g", "h"];

        $gamePieces = [
            "rook_W" => "♖",
            "knight_W" => "♘",
            "bishop_W" => "♗",
            "king_W" => "♔",
            "queen_W" => "♕",
            "pawn_W" => "♙",

            "rook_B" => "♜",
            "knight_B" => "♞",
            "bishop_B" => "♝",
            "king_B" => "♚",
            "queen_B" => "♛",
            "pawn_B" => "♟︎"
        ];

        $board = [
            "rook_B", "knight_B", "bishop_B", "king_B", "queen_B", "bishop_B", "knight_B", "rook_B",
            "pawn_B", "pawn_B", "pawn_B", "pawn_B", "pawn_B", "pawn_B", "pawn_B", "pawn_B",
            "", "", "", "", "", "", "", "",
            "", "", "", "", "", "", "", "",
            "", "", "", "", "", "", "", "",
            "", "", "", "", "", "", "", "",
            "pawn_W", "pawn_W", "pawn_W", "pawn_W", "pawn_W", "pawn_W", "pawn_W", "pawn_W",
            "rook_W", "knight_W", "bishop_W", "king_W", "queen_W", "bishop_W", "knight_W", "rook_W",
        ];
        
        function printBoard(){
            global $board;
            global $letters;
            global $gamePieces;

            $indexNum = 0;

            for ($row = 0; $row < 8; $row++) {
                echo '<div class="row">';
                for ($column = 0; $column < 8; $column++) {

                    $icon = "";

                    if(!$board[$indexNum] == "") {
                        $icon = $gamePieces[$board[$indexNum]];
                    } 
                    if(($indexNum + $row) % 2 == 0) {
                        $tile = "square black";
                    } else{
                        $tile = "square white";
                    }
                    
                    $indexNum++;
                    echo '<button class="' . $tile . '" id="' . $letters[$row] . ($column + 1) . '">' . $icon . '</button>';

                }
                echo "</div>";
            }



        }

        printBoard();

        function copyIcon($icon, $id) {

            session_start(); 
            $_SESSION["copy_icon"] = $icon; // Antony please take over
            $_SESSION["copy_from"] = $id; // This do the copy of the icon in square

        }

        

        ?>
        </form>


    </div>

</body>
