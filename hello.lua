print("helloworld")
local health = 100
local damage = 25
server = "localhost"
file = io.open("log.txt", "w")
file:write("Server: " .. server .. "\n")
exit = false
random = math.random(1, 100)
ft = io.open("log.txt", "a")
if random > 50 then
    health = health - damage
    ft:write("Damage taken: " .. damage .. "\n")
else
    ft:write("No damage taken.\n")
end
if health <= 0 then
    ft:write("Player has died.\n")
    exit = true
else
    ft:write("Player health: " .. health .. "\n")
end
ft:close()
the file:close()
end
