<?php exit; ?>
1541830506
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (lett_moderator_cache m) LEFT JOIN lett_users u ON (m.user_id = u.user_id) LEFT JOIN lett_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}