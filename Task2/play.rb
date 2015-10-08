class Player 
attr_accessor :name,:blood,:mana,:curent


$name=%w[]
$blood=[]
$mana=[]
$curent=$name.count


def curentplayer
	puts $name
	puts $curent
end


def create_player
	if $curent >= 3
      puts " Sorry player max"
    else
      puts "#-----------------------------------------------------#"

      puts "#Put Player name :                                    #"
      char_name=gets.chomp #gets string variable 
      chck=$name.include? char_name
      if (chck==false)
      $name << char_name
      $blood << 100
      $mana << 40
      $curent +=1
       puts  "# Sucsess create player with name : #{name}"
      else
      	puts "# Name '#{name}' already take "
      	    end	    
end
end



def prepare

	puts "# Who will attack :  "
STDOUT.flush
attack = gets.chomp
	puts "# Who attacked    :  "
	STDOUT.flush
	defend=gets.chomp

catt = $name.include? attack
cdef= $name.include? defend

if (catt == false  || cdef == false)
	puts "Attack or Attacker not avaible please check name player"
else
	puts action(attack,defend)
	
end # end if 
end


def action(attack,defend)
	#get index variable array variable
	idxatt = $name.index(attack) 
    idxdef = $name.index(defend)
    # get name value 
    name_att = $name[idxatt]
    name_def = $name[idxdef]
    # get blood value where index = idxatt or number index
    blood_att = $blood[idxatt]  
    blood_def = $blood[idxdef]  
    # get mana value where index =idxatt  or number index 
    mana_att  = $mana[idxatt]  
    mana_def  = $mana[idxdef]   
    #reduce mana and blood
    reduce_mana  = mana_att - 20
    reduce_blood = blood_def - 20
    #get mana and blood after reduce
    $mana[idxatt] = reduce_mana
    $blood[idxdef] = reduce_blood


    if ($blood[idxdef] != 0)
      puts "", "     <#{name_att} IS ATTACKING #{name_def}!!!>", ""
      puts "     DESCRIPTION:"
      puts "#-----------------------------------------------------#"
      print "     * #{name_att}: Blood = #{blood_att}, Manna = #{$mana[idxatt]}\n"
      print "     * #{name_def}: Blood = #{$blood[idxdef]}, Manna = #{mana_def}\n"
      return prepare
        else
      puts "", "     <#{name_att} IS ATTACKING #{name_def}!!!>", ""
      puts "     DESCRIPTION:"
      puts "#-----------------------------------------------------#"
      print "     * #{name_att}: Blood = #{blood_att}, Manna = #{$mana[idxatt]}\n"
      print "     * #{name_def}: Blood = #{$blood[idxdef]}, Manna = #{mana_def}\n"
      puts "", "     <GAME OVER, #{name_att} IS WIN!!!"
      puts "#-----------------------------------------------------#"
$name.clear
$blood.clear
$mana.clear
$current=$name.count

     end

end

end















class Menu
attr_reader :exit
def initialize( *jml_menu )
  $curent=0
$jml_menu = jml_menu
@exit= "exit"	
end


def menu_header


	puts"# ====================================================== # "
  puts"# Welcome to the Battle Arena                            # "
  puts"# ------------------------------------------------------ # "
  puts"# Description:                                           # "
  $jml_menu.each_with_index do |item,index|
  puts"#{index}.#{item}"     	
	
end

    puts "#-----------------------------------------------------#"
    puts "# * Current Player: "
    puts $curent
    $name.each {|nama| puts "     - Player Name: #{nama}"}
    puts "     * Max Player 2 or 3"
    puts "#-----------------------------------------------------#"
    print "     * Input : "
    inp_user = gets.chomp.downcase
    return inp_user
  end
end


	menu = Menu.new(
		"type 'new' to create character                         #",
		"type 'start' to begin the fight                        #",
		"type 'exit' to exit the game                           #")

	player = Player.new


while((pil = menu.menu_header) != menu.exit)
  if pil == "new"
    player.create_player

  elsif pil == "start"
   
    if  $name.any?
    puts "#=====================================================#"
    puts "#              Welcome to Battle Arena                #"
    puts "#-----------------------------------------------------#"
    puts "#    Battle Start :                                   #"
    puts '#-----------------------------------------------------#'
    player.prepare
    else
              puts "       please make character first     "
              puts "       ===========================   \n"

   
end

  else
    puts '', '     <PLEASE CHOOSE BETWEEN NEW, START OR EXIT!!!>', ''





end
end


