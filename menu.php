

    <div id="overview" class="sidebar">
        <h1>Arduino and electronics</h1>
        <ul>

        <?php
        $html = '';
        foreach (['overview','assessment','week1','week2','week3','week4'] as $page) {
            $html .= '<li>';
            $html .= ($active == $page) 
                ? "<b>$page</b>"
                : "<a href=\"$page.php\">$page</a>";
            $html .= '</li>';
        }

        print $html;
        ?>
        </ul>
    </div>