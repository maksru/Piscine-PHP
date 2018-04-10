SELECT UPPER(user_card.last_name) AS NAME, user_card.first_name, subscription.price
FROM user_card
INNER JOIN member ON user_card.id_user=member.id_member
INNER JOIN subscription ON member.id_member = subscription.id_sub
WHERE subscription.price > 42
ORDER BY user_card.last_name, user_card.first_name ASC;