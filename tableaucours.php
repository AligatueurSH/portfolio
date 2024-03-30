<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
   $('#example').DataTable();
});
</script>
</head>
<body>

<table id="example" class="display" style="width:100%">
  <thead>
    <tr><td>classement</td><td>Titre</td><td>Année</td><td>Réalisateur</td><td>pays</td><td>entrées (Millions)</td></tr>
<tr><td>1</td><td>Titanic</td><td>1998</td><td>J. Cameron</td><td>US</td><td>21,80</td></tr>
<tr><td>2</td><td>Bienvenue chez les Ch'tis</td><td>2008</td><td>D. Boon</td><td>FR</td><td>20,44</td></tr>
<tr><td>3</td><td>Intouchables</td><td>2011</td><td>E. Tolédano, O. Nakache</td><td>FR</td><td>19,51</td></tr>
<tr><td>4</td><td>La Grande Vadrouille</td><td>1966</td><td>G. Oury</td><td>FR/GB</td><td>17,33</td></tr>
<tr><td>5</td><td>Autant en emporte le vent</td><td>1950</td><td>V. Fleming</td><td>US</td><td>16,73</td></tr>
<tr><td>6</td><td>Il était une fois dans l'Ouest</td><td>1969</td><td>S. Leone</td><td>IT</td><td>14,89</td></tr>
<tr><td>7</td><td>Le Livre de la jungle</td><td>1968</td><td>W. Reitherman</td><td>US</td><td>14,80</td></tr>
<tr><td>8</td><td>Avatar</td><td>2009</td><td>J. Cameron</td><td>US</td><td>14,78</td></tr>
<tr><td>9</td><td>Les 101 Dalmatiens</td><td>1961</td><td>W. Disney</td><td>US</td><td>14,70</td></tr>
<tr><td>10</td><td>Astérix et Obélix : mission Cléopâtre</td><td>2002</td><td>A. Chabat</td><td>FR</td><td>14,41</td></tr>
<tr><td>11</td><td>Les Dix Commandements</td><td>1958</td><td>C.B. DeMille</td><td>US</td><td>14,24</td></tr>
<tr><td>12</td><td>Ben Hur</td><td>1960</td><td>W. Wyler</td><td>US</td><td>13,86</td></tr>
<tr><td>13</td><td>Les Visiteurs</td><td>1993</td><td>J.M. Poiré</td><td>FR</td><td>13,67</td></tr>
<tr><td>14</td><td>Le Pont de la rivière Kwai</td><td>1957</td><td>D. Lean</td><td>GB</td><td>13,48</td></tr>
<tr><td>15</td><td>Cendrillon</td><td>1950</td><td>W. Disney</td><td>US</td><td>13,27</td></tr>
<tr><td>16</td><td>Le Petit Monde de Don Camillo</td><td>1952</td><td>J. Duvivier</td><td>IT/FR</td><td>12,79</td></tr>
<tr><td>17</td><td>Les Aristochats</td><td>1971</td><td>W. Reitherman</td><td>US</td><td>12,74</td></tr>
<tr><td>18</td><td>Qu'est-ce qu'on a fait au bon dieu ?</td><td>2014</td><td>P. De Chauveron</td><td>FR</td><td>12,36</td></tr>
<tr><td>19</td><td>Le Jour le plus long</td><td>1962</td><td>Collectif</td><td>US</td><td>11,93</td></tr>
<tr><td>20</td><td>Le Corniaud</td><td>1965</td><td>G. Oury</td><td>FR/IT</td><td>11,74</td></tr>
<tr><td>21</td><td>La Belle et le clochard</td><td>1955</td><td>W. Disney</td><td>US</td><td>11,25</td></tr>
<tr><td>22</td><td>Le Roi lion</td><td>1994</td><td>R. Aller, R. Minkoff</td><td>US</td><td>10,75</td></tr>
<tr><td>23</td><td>Bambi</td><td>1948</td><td>W. Disney</td><td>US</td><td>10,72</td></tr>
<tr><td>24</td><td>Star Wars : Episode 7, le reveil de la force</td><td>2015</td><td>J. J. Abrams</td><td>US</td><td>10,35</td></tr>
<tr><td>25</td><td>Taxi 2</td><td>2000</td><td>G. Krawczyk</td><td>FR</td><td>10,30</td></tr>
<tr><td>26</td><td>Trois hommes et un couffin</td><td>1985</td><td>C. Serreau</td><td>FR</td><td>10,25</td></tr>
<tr><td>27</td><td>Les Bronzés 3 - amis pour la vie</td><td>2006</td><td>P. Leconte</td><td>FR</td><td>10,23</td></tr>
<tr><td>28</td><td>Les Canons de Navarone</td><td>1961</td><td>J. Lee Thompson</td><td>US</td><td>10,18</td></tr>
<tr><td>29</td><td>La Guerre des boutons</td><td>1962</td><td>Y. Robert</td><td>FR</td><td>10,05</td></tr>
<tr><td>30</td><td>Les Misérables</td><td>1958</td><td>J.P. Le Chanois, J.P. Dreyfus</td><td>FR/IT</td><td>9,97</td></tr>
<tr><td>31</td><td>Le Roi Lion</td><td>2019</td><td>J. Favreau</td><td>US</td><td>9,85</td></tr>
<tr><td>32</td><td>Docteur Jivago</td><td>1966</td><td>D. Lean</td><td>US</td><td>9,82</td></tr>
<tr><td>33</td><td>E.T. l'extra-terrestre</td><td>1982</td><td>S. Spielberg</td><td>US</td><td>9,82</td></tr>
<tr><td>34</td><td>Vingt mille lieues sous les mers</td><td>1955</td><td>R. Fleischer</td><td>US</td><td>9,63</td></tr>
<tr><td>35</td><td>Harry Potter à l'école des sorciers</td><td>2001</td><td>C. Colombus</td><td>US</td><td>9,54</td></tr>
<tr><td>36</td><td>Sous le plus grand chapiteau du monde</td><td>1953</td><td>C.B. DeMille</td><td>US</td><td>9,49</td></tr>
<tr><td>37</td><td>Le Monde de Nemo</td><td>2003</td><td>A. Stanton, L. Unkrich</td><td>US</td><td>9,44</td></tr>
<tr><td>38</td><td>Le Dîner de cons</td><td>1998</td><td>F. Veber</td><td>FR</td><td>9,25</td></tr>
<tr><td>39</td><td>Le Grand Bleu</td><td>1988</td><td>L. Besson</td><td>FR</td><td>9,20</td></tr>
<tr><td>40</td><td>L'Ours</td><td>1988</td><td>J.J. Annaud</td><td>FR</td><td>9,14</td></tr>
<tr><td>41</td><td>Emmanuelle</td><td>1974</td><td>J. Jaeckin</td><td>FR</td><td>8,89</td></tr>
<tr><td>42</td><td>Harry Potter et la chambre des secrets</td><td>2002</td><td>C. Colombus</td><td>US</td><td>8,86</td></tr>
<tr><td>43</td><td>La Vache et le prisonnier</td><td>1959</td><td>H. Verneuil</td><td>FR/IT</td><td>8,85</td></tr>
<tr><td>44</td><td>West Side Story</td><td>1962</td><td>R. Wise, J. Robbins</td><td>US</td><td>8,78</td></tr>
<tr><td>45</td><td>Astérix et Obélix contre César</td><td>1999</td><td>C. Zidi</td><td>FR/DE/IT</td><td>8,78</td></tr>
<tr><td>46</td><td>La Grande Evasion</td><td>1963</td><td>R. Walsh</td><td>US</td><td>8,76</td></tr>
<tr><td>47</td><td>Le Bataillon du ciel</td><td>1947</td><td>A. Esway</td><td>FR</td><td>8,65</td></tr>
<tr><td>48</td><td>Le Fabuleux Destin d'Amélie Poulain</td><td>2001</td><td>J.P. Jeunet</td><td>FR/DE</td><td>8,53</td></tr>
<tr><td>49</td><td>Les Choristes</td><td>2004</td><td>C. Barratier</td><td>FR/CH</td><td>8,47</td></tr>
<tr><td>50</td><td>Le Dictateur</td><td>1945</td><td>C. Chaplin</td><td>US</td><td>8,40</td></tr>
<tr><td>51</td><td>Pour qui sonne le glas ?</td><td>1947</td><td>S. Wood</td><td>US</td><td>8,27</td></tr>
<tr><td>52</td><td>Rien à déclarer</td><td>2011</td><td>D. Boon</td><td>FR/BE</td><td>8,14</td></tr>
<tr><td>53</td><td>Violettes impériales</td><td>1952</td><td>R. Pottier</td><td>FR/ES</td><td>8,13</td></tr>
<tr><td>54</td><td>Les Couloirs du temps - les visiteurs 2</td><td>1998</td><td>J.M. Poiré</td><td>FR</td><td>8,04</td></tr>
<tr><td>55</td><td>Le Boulanger de Valorgue</td><td>1953</td><td>H. Verneuil</td><td>FR</td><td>7,89</td></tr>
<tr><td>56</td><td>Un Indien dans la ville</td><td>1994</td><td>H. Palud</td><td>FR</td><td>7,89</td></tr>
<tr><td>57</td><td>Pinocchio</td><td>1946</td><td>W. Disney</td><td>US</td><td>7,85</td></tr>
<tr><td>58</td><td>L'Âge de glace 3 - le temps des dinosaures</td><td>2009</td><td>C. Saldanha</td><td>US</td><td>7,84</td></tr>
<tr><td>59</td><td>Star Wars : épisode 1 - la menace fantôme</td><td>1999</td><td>G. Lucas</td><td>US</td><td>7,84</td></tr>
<tr><td>60</td><td>Tarzan</td><td>1999</td><td>C. Buck, K. Lima</td><td>US</td><td>7,82</td></tr>
<tr><td>61</td><td>Le Gendarme de Saint-Tropez</td><td>1964</td><td>J. Girault</td><td>FR/IT</td><td>7,81</td></tr>
<tr><td>62</td><td>Le Comte de Monte Cristo</td><td>1955</td><td>R. Vernay</td><td>FR/IT</td><td>7,78</td></tr>
<tr><td>63</td><td>Sixième Sens</td><td>2000</td><td>M. Night Shyamalan</td><td>US</td><td>7,74</td></tr>
<tr><td>64</td><td>Ratatouille</td><td>2007</td><td>B. Bird, J. Pinkava</td><td>US</td><td>7,73</td></tr>
<tr><td>65</td><td>Le Cinquième Elément</td><td>1997</td><td>L. Besson</td><td>FR</td><td>7,71</td></tr>
<tr><td>66</td><td>Harry Potter et la coupe de feu</td><td>2005</td><td>M. Newell</td><td>GB</td><td>7,71</td></tr>
<tr><td>67</td><td>la famille Bélier</td><td>2014</td><td>É. Lartigau</td><td>FR</td><td>7,70</td></tr>
<tr><td>68</td><td>Orange mécanique</td><td>1972</td><td>S. Kubrick</td><td>GB</td><td>7,63</td></tr>
<tr><td>69</td><td>La Reine des neiges 2</td><td>2019</td><td>C. Buck, J. Lee</td><td>US</td><td>7,53</td></tr>
<tr><td>70</td><td>Les Bidasses en folie</td><td>1971</td><td>C. Zidi</td><td>FR</td><td>7,46</td></tr>
<tr><td>71</td><td>Le Retour de Don Camillo</td><td>1953</td><td>J. Duvivier</td><td>IT/FR</td><td>7,43</td></tr>
<tr><td>72</td><td>Le Seigneur des anneaux - le retour du roi</td><td>2003</td><td>P. Jackson</td><td>NZ</td><td>7,42</td></tr>
<tr><td>73</td><td>La Vérité si je mens 2</td><td>2001</td><td>T. Gilou</td><td>FR</td><td>7,41</td></tr>
<tr><td>74</td><td>Jour de fête</td><td>1949</td><td>J. Tati</td><td>FR</td><td>7,39</td></tr>
<tr><td>75</td><td>Aladdin</td><td>1993</td><td>J. Musker</td><td>US</td><td>7,35</td></tr>
<tr><td>76</td><td>Les Aventures de Peter Pan</td><td>1953</td><td>W. Disney</td><td>US</td><td>7,35</td></tr>
<tr><td>77</td><td>Les Aventures de Rabbi Jacob</td><td>1973</td><td>G. Oury</td><td>FR/IT</td><td>7,31</td></tr>
<tr><td>78</td><td>Danse avec les loups</td><td>1991</td><td>K. Costner</td><td>US</td><td>7,28</td></tr>
<tr><td>79</td><td>Les Aventures de Bernard et Bianca</td><td>1977</td><td>Collectif</td><td>US</td><td>7,24</td></tr>
<tr><td>80</td><td>Jean de Florette</td><td>1986</td><td>C. Berri</td><td>FR</td><td>7,23</td></tr>
<tr><td>81</td><td>Star Wars : épisode 3 - la revanche des Sith</td><td>2005</td><td>G. Lucas</td><td>US</td><td>7,21</td></tr>
<tr><td>82</td><td>Harry Potter et le prisonnier d'Azkaban</td><td>2004</td><td>A. Cuaron</td><td>GB</td><td>7,15</td></tr>
<tr><td>83</td><td>Shrek 2</td><td>2004</td><td>A. Adamson, V. Jenson</td><td>US</td><td>7,14</td></tr>
<tr><td>84</td><td>Le Seigneur des anneaux - les deux tours</td><td>2002</td><td>P. Jackson</td><td>NZ</td><td>7,13</td></tr>
<tr><td>85</td><td>Samson et Dalila</td><td>1951</td><td>C.B. DeMille</td><td>US</td><td>7,12</td></tr>
<tr><td>86</td><td>Star Wars les derniers Jedi</td><td>2017</td><td>R. Johnson</td><td>US</td><td>7,09</td></tr>
<tr><td>87</td><td>Jeanne d'Arc</td><td>1949</td><td>V. Fleming</td><td>US</td><td>7,09</td></tr>
<tr><td>88</td><td>La Chèvre</td><td>1981</td><td>F. Veber</td><td>FR/MX</td><td>7,08</td></tr>
<tr><td>89</td><td>Monsieur Vincent</td><td>1947</td><td>M. Cloche</td><td>FR</td><td>7,06</td></tr>
<tr><td>90</td><td>Les Sept Mercenaires</td><td>1961</td><td>J. Sturges</td><td>US</td><td>7,04</td></tr>
<tr><td>91</td><td>Le Seigneur des anneaux - la communauté de l'anneau</td><td>2001</td><td>P. Jackson</td><td>NZ</td><td>7,01</td></tr>
<tr><td>92</td><td>Skyfall</td><td>2012</td><td>S. Mendes</td><td>GB</td><td>7,01</td></tr>
<tr><td>93</td><td>Si Versailles m'était conté</td><td>1954</td><td>S. Guitry</td><td>FR</td><td>6,99</td></tr>
<tr><td>94</td><td>Les Grandes Vacances</td><td>1967</td><td>J. Girault</td><td>FR/IT</td><td>6,99</td></tr>
<tr><td>95</td><td>Le Salaire de la peur</td><td>1953</td><td>H.G. Clouzot</td><td>FR/IT</td><td>6,95</td></tr>
<tr><td>96</td><td>Michel Strogoff</td><td>1956</td><td>C. Gallone</td><td>FR/IT</td><td>6,87</td></tr>
<tr><td>97</td><td>Le Gendarme se marie</td><td>1968</td><td>J. Girault</td><td>FR/IT</td><td>6,83</td></tr>
<tr><td>98</td><td>Avengers : Endgame</td><td>2019</td><td>A. Russo, J. Russo</td><td>US</td><td>6,83</td></tr>
<tr><td>99</td><td>Le Bossu de Notre-Dame</td><td>1996</td><td>K. Wise, G. Trousdale</td><td>US</td><td>6,81</td></tr>
<tr><td>100</td><td>Astérix aux Jeux Olympiques</td><td>2008</td><td>F. Forestier, T. Langmann</td><td>FR/DE/ES/IT</td><td>6,81</td></tr>
<tr><td>101</td><td>Mission spéciale</td><td>1946</td><td>M. de Canonge</td><td>FR</td><td>6,78</td></tr>
<tr><td>102</td><td>Jurassic Park</td><td>1993</td><td>S. Spielberg</td><td>US</td><td>6,75</td></tr>
<tr><td>103</td><td>Fanfan la Tulipe</td><td>1952</td><td>Christian-Jaque</td><td>FR/IT</td><td>6,74</td></tr>
<tr><td>104</td><td>L'Exorciste</td><td>1974</td><td>W. Friedkin</td><td>US</td><td>6,73</td></tr>
<tr><td>105</td><td>Qu'est-ce qu'on a encore fait au bon dieu ?</td><td>2019</td><td>P. de Chauveron</td><td>FR / BE</td><td>6,72</td></tr>
<tr><td>106</td><td>Rox et Rouky</td><td>1981</td><td>A. Stevens</td><td>US</td><td>6,72</td></tr>
<tr><td>107</td><td>Goldfinger</td><td>1965</td><td>G. Hamilton</td><td>GB</td><td>6,68</td></tr>
<tr><td>108</td><td>Les Trois Frères</td><td>1995</td><td>D. Bourdon, B. Campan</td><td>FR</td><td>6,67</td></tr>
<tr><td>109</td><td>les Minions</td><td>2015</td><td>P. Coffin, K. Balda</td><td>US</td><td>6,66</td></tr>
<tr><td>110</td><td>Nous irons à Paris</td><td>1950</td><td>J. Boyer</td><td>FR</td><td>6,66</td></tr>
<tr><td>111</td><td>Manon des sources</td><td>1986</td><td>C. Berri</td><td>FR</td><td>6,65</td></tr>
<tr><td>112</td><td>l'Age de glace 4 : la dérive des continents</td><td>2012</td><td>M.Thurmeier, S. Martino</td><td>US</td><td>6,64</td></tr>
<tr><td>113</td><td>Sissi</td><td>1956</td><td>E. Marischka</td><td>AT</td><td>6,64</td></tr>
<tr><td>114</td><td>L'Age de glace 2</td><td>2006</td><td>C. Saldanha</td><td>US</td><td>6,63</td></tr>
<tr><td>115</td><td>Le Cercle des poètes disparus</td><td>1989</td><td>P. Weir</td><td>US</td><td>6,60</td></tr>
<tr><td>116</td><td>La Belle au bois dormant</td><td>1959</td><td>W. Disney</td><td>US</td><td>6,59</td></tr>
<tr><td>117</td><td>Harry Potter et les reliques de la mort - 2e partie</td><td>2011</td><td>D. Yates</td><td>GB</td><td>6,57</td></tr>
<tr><td>118</td><td>Pirates des Caraïbes - le secret du coffre maudit</td><td>2006</td><td>G. Verbinski</td><td>US</td><td>6,52</td></tr>
<tr><td>119</td><td>Taxi</td><td>1998</td><td>G. Pires</td><td>FR</td><td>6,49</td></tr>
<tr><td>120</td><td>Robin des bois</td><td>1974</td><td>W. Reitherman</td><td>US</td><td>6,48</td></tr>
<tr><td>121</td><td>Rain Man</td><td>1989</td><td>B. Levinson</td><td>US</td><td>6,48</td></tr>
<tr><td>122</td><td>La Guerre des étoiles</td><td>1977</td><td>G. Lucas</td><td>US</td><td>6,46</td></tr>
<tr><td>123</td><td>Sissi impératrice</td><td>1957</td><td>E. Marischka</td><td>AT</td><td>6,43</td></tr>
<tr><td>124</td><td>Les Aventuriers de l'arche perdue</td><td>1981</td><td>S. Spielberg</td><td>US</td><td>6,40</td></tr>
<tr><td>125</td><td>Tant qu'il y aura des hommes</td><td>1954</td><td>F. Zinnemann</td><td>US</td><td>6,40</td></tr>
<tr><td>126</td><td>Arthur et les Minimoys</td><td>2006</td><td>L. Besson</td><td>FR</td><td>6,40</td></tr>
<tr><td>127</td><td>La Cuisine au beurre</td><td>1963</td><td>G. Grangier</td><td>FR/IT</td><td>6,40</td></tr>
<tr><td>128</td><td>Spider-Man</td><td>2002</td><td>S. Raimi</td><td>US</td><td>6,38</td></tr>
<tr><td>129</td><td>La Symphonie pastorale</td><td>1946</td><td>J. Delannoy</td><td>FR</td><td>6,37</td></tr>
<tr><td>130</td><td>Ivanhoé</td><td>1952</td><td>R. Thorpe</td><td>US</td><td>6,36</td></tr>
<tr><td>131</td><td>Le Bon, la brute et le truand</td><td>1968</td><td>S. Leone</td><td>IT</td><td>6,35</td></tr>
<tr><td>132</td><td>Les Dents de la mer</td><td>1976</td><td>S. Spielberg</td><td>US</td><td>6,33</td></tr>
<tr><td>133</td><td>Spider-Man 3</td><td>2007</td><td>S. Raimi</td><td>US</td><td>6,32</td></tr>
<tr><td>134</td><td>Quo Vadis</td><td>1953</td><td>M. Le Roy</td><td>US</td><td>6,31</td></tr>
<tr><td>135</td><td>La Gloire de mon père</td><td>1990</td><td>Y. Robert</td><td>FR</td><td>6,30</td></tr>
<tr><td>136</td><td>Le Gendarme et les extra-terrestres</td><td>1979</td><td>J. Girault</td><td>FR</td><td>6,28</td></tr>
<tr><td>137</td><td>Indiana Jones et la dernière croisade</td><td>1989</td><td>S. Spielberg</td><td>US</td><td>6,26</td></tr>
<tr><td>138</td><td>Harry Potter et l'ordre du Phénix</td><td>2007</td><td>D. Yates</td><td>GB</td><td>6,22</td></tr>
<tr><td>139</td><td>Marche à l'ombre</td><td>1984</td><td>M. Blanc</td><td>FR</td><td>6,17</td></tr>
<tr><td>140</td><td>Pas si bête</td><td>1946</td><td>A. Berthomieu</td><td>FR</td><td>6,17</td></tr>
<tr><td>141</td><td>Merlin l'enchanteur</td><td>1964</td><td>W. Reitherman</td><td>US</td><td>6,16</td></tr>
<tr><td>142</td><td>La Chartreuse de Parme</td><td>1948</td><td>Christian-Jaque</td><td>FR</td><td>6,15</td></tr>
<tr><td>143</td><td>Germinal</td><td>1993</td><td>C. Berri</td><td>FR/BE</td><td>6,15</td></tr>
<tr><td>144</td><td>Le Père tranquille</td><td>1946</td><td>R. Clément</td><td>FR</td><td>6,14</td></tr>
<tr><td>145</td><td>Harry Potter et le Prince de sang-mêlé</td><td>2009</td><td>D. Yates</td><td>GB</td><td>6,14</td></tr>
<tr><td>146</td><td>Les Feux de la rampe</td><td>1952</td><td>C. Chaplin</td><td>US</td><td>6,14</td></tr>
<tr><td>147</td><td>Oscar</td><td>1967</td><td>E. Molinaro</td><td>FR</td><td>6,12</td></tr>
<tr><td>148</td><td>Taxi 3</td><td>2003</td><td>G. Krawczyk</td><td>FR</td><td>6,11</td></tr>
<tr><td>149</td><td>Harry Potter et les reliques de la mort - 1re partie</td><td>2010</td><td>D. Yates</td><td>GB</td><td>6,10</td></tr>
<tr><td>150</td><td>Star Wars : épisode 9, l'ascension de Skywalker</td><td>2019</td><td>J.J. Abrams</td><td>US</td><td>6,06</td></tr>
<tr><td>151</td><td>Terminator 2 - le jugement dernier</td><td>1991</td><td>J. Cameron</td><td>US</td><td>6,01</td></tr>
<tr><td>152</td><td>Midnight Express</td><td>1978</td><td>A. Parker</td><td>GB</td><td>5,97</td></tr>
<tr><td>153</td><td>Les Dieux sont tombés sur la tête</td><td>1983</td><td>J. Uys</td><td>ZA</td><td>5,95</td></tr>
<tr><td>154</td><td>Mourir d'aimer</td><td>1971</td><td>A. Cayatte</td><td>FR/IT</td><td>5,91</td></tr>
<tr><td>155</td><td>Qui veut la peau de Roger Rabbit ?</td><td>1988</td><td>R. Zemeckis</td><td>US</td><td>5,91</td></tr>
<tr><td>156</td><td>Crocodile Dundee</td><td>1987</td><td>P. Faiman</td><td>AU</td><td>5,89</td></tr>
<tr><td>157</td><td>Guerre et Paix</td><td>1956</td><td>K. Vidor</td><td>US</td><td>5,89</td></tr>
<tr><td>158</td><td>Les Ripoux</td><td>1984</td><td>C. Zidi</td><td>FR</td><td>5,88</td></tr>
<tr><td>159</td><td>L'Odyssée du Docteur Wassel</td><td>1946</td><td>C.B. DeMille</td><td>US</td><td>5,87</td></tr>
<tr><td>160</td><td>Rambo 2 - la mission</td><td>1985</td><td>G.P. Cosmatos</td><td>US</td><td>5,85</td></tr>
<tr><td>161</td><td>Le Bossu</td><td>1959</td><td>A. Hunebelle</td><td>FR/IT</td><td>5,85</td></tr>
<tr><td>162</td><td>L'Aile ou la Cuisse</td><td>1976</td><td>C. Zidi</td><td>FR</td><td>5,84</td></tr>
<tr><td>163</td><td>Sissi face à son destin</td><td>1958</td><td>E. Marischka</td><td>AT</td><td>5,79</td></tr>
<tr><td>164</td><td>Les Vacances de Monsieur Hulot</td><td>1953</td><td>J. Tati</td><td>FR</td><td>5,78</td></tr>
<tr><td>165</td><td>Quatre mariages et un enterrement</td><td>1994</td><td>M. Newell</td><td>GB</td><td>5,78</td></tr>
<tr><td>166</td><td>Mulan</td><td>1998</td><td>T. Bancroft, B. Cook</td><td>US</td><td>5,78</td></tr>
<tr><td>167</td><td>Men in Black</td><td>1997</td><td>B. Sonnenfeld</td><td>US</td><td>5,76</td></tr>
<tr><td>168</td><td>Le train sifflera trois fois</td><td>1952</td><td>F. Zinnemann</td><td>US</td><td>5,76</td></tr>
<tr><td>169</td><td>Moi, moche et méchant 3</td><td>2017</td><td>K. Balda, P. Coffin, E. Guillon</td><td>US</td><td>5,75</td></tr>
<tr><td>170</td><td>Grease</td><td>1978</td><td>R. Kleiser</td><td>US</td><td>5,74</td></tr>
<tr><td>171</td><td>Les Fous du stade</td><td>1972</td><td>C. Zidi</td><td>FR</td><td>5,74</td></tr>
<tr><td>172</td><td>Les Indestructibles 2</td><td>2018</td><td>B. Brad</td><td>US</td><td>5,74</td></tr>
<tr><td>173</td><td>Le Troisième Homme</td><td>1949</td><td>C. Reed</td><td>GB</td><td>5,74</td></tr>
<tr><td>174</td><td>Opération tonnerre</td><td>1965</td><td>T. Young</td><td>GB</td><td>5,74</td></tr>
<tr><td>175</td><td>Andalousie</td><td>1951</td><td>R. Vernay</td><td>FR/ES</td><td>5,74</td></tr>
<tr><td>176</td><td>Les Anges gardiens</td><td>1995</td><td>J.M. Poiré</td><td>FR</td><td>5,73</td></tr>
<tr><td>177</td><td>Les Valseuses</td><td>1974</td><td>B. Blier</td><td>FR</td><td>5,73</td></tr>
<tr><td>178</td><td>La Bataille du rail</td><td>1946</td><td>R. Clément</td><td>FR</td><td>5,73</td></tr>
<tr><td>179</td><td>Lawrence d'Arabie</td><td>1963</td><td>D. Lean</td><td>GB</td><td>5,72</td></tr>
<tr><td>180</td><td>A nous les petites Anglaises</td><td>1976</td><td>M. Lang</td><td>FR</td><td>5,70</td></tr>
<tr><td>181</td><td>La Vérité</td><td>1960</td><td>H.G. Clouzot</td><td>FR/IT</td><td>5,70</td></tr>
<tr><td>182</td><td>Notre-Dame de Paris</td><td>1956</td><td>J. Delannoy</td><td>FR/IT</td><td>5,70</td></tr>
<tr><td>183</td><td>Indiana Jones et le temple maudit</td><td>1984</td><td>S. Spielberg</td><td>US</td><td>5,69</td></tr>
<tr><td>184</td><td>Les Tuche 3</td><td>2018</td><td>O. Baroux</td><td>FR</td><td>5,69</td></tr>
<tr><td>185</td><td>Matrix Reloaded</td><td>2003</td><td>L. Wachowski, A. Wachowski</td><td>US</td><td>5,67</td></tr>
<tr><td>186</td><td>Pirates des Caraïbes - jusqu'au bout du monde</td><td>2007</td><td>G. Verbinski</td><td>US</td><td>5,64</td></tr>
<tr><td>187</td><td>Pocahontas, une légende indienne</td><td>1995</td><td>M. Gabriel, E. Goldberg</td><td>US</td><td>5,63</td></tr>
<tr><td>188</td><td>Bons baisers de Russie</td><td>1964</td><td>T. Young</td><td>GB</td><td>5,63</td></tr>
<tr><td>189</td><td>Star Wars : épisode 2 - l'attaque des clones</td><td>2002</td><td>G. Lucas</td><td>US</td><td>5,62</td></tr>
<tr><td>190</td><td>La Ch'tite Famille</td><td>2018</td><td>D. Boon</td><td>FR</td><td>5,62</td></tr>
<tr><td>191</td><td>Le Petit Nicolas</td><td>2009</td><td>L. Tirard</td><td>FR/BE</td><td>5,62</td></tr>
<tr><td>192</td><td>Joker</td><td>2019</td><td>T. Phillips</td><td>US</td><td>5,61</td></tr>
<tr><td>193</td><td>Independence Day</td><td>1996</td><td>R. Emmerich</td><td>US</td><td>5,61</td></tr>
<tr><td>194</td><td>Quai des Orfèvres</td><td>1947</td><td>H.G. Clouzot</td><td>FR</td><td>5,58</td></tr>
<tr><td>195</td><td>La Folie des grandeurs</td><td>1971</td><td>G. Oury</td><td>FR/DE/ES</td><td>5,57</td></tr>
<tr><td>196</td><td>Le Cerveau</td><td>1969</td><td>G. Oury</td><td>FR/IT</td><td>5,55</td></tr>
<tr><td>197</td><td>Vaïana, la légende du bout du monde</td><td>2016</td><td>J. Musker, R. Clements</td><td>US</td><td>5,55</td></tr>
<tr><td>198</td><td>Le Petit Baigneur</td><td>1968</td><td>R. Dhéry</td><td>FR/IT</td><td>5,54</td></tr>
<tr><td>199</td><td>Shrek le troisième</td><td>2007</td><td>C. Miller</td><td>US</td><td>5,54</td></tr>
<tr><td>200</td><td>Love Story</td><td>1971</td><td>A. Hiller</td><td>US</td><td>5,51</td></tr>
</table>

</body>
</html>
