<?php  

require '../../php/functions.php'; 

$text = <<<TEXT
<tr><th>#</th><th>Имя</th><th>Шестнадцатеричный код</th><th>Цвет</th></tr>
			<tr id="a"><td colspan="4" class="with-background"></td></tr>
			<tr><td>1</td><td>AliceBlue</td><td>#f0f8ff</td><td style="background:#f0f8ff"></td></tr>
			<tr><td>2</td><td>AntiqueWhite</td><td>#faebd7</td><td style="background:#faebd7"></td></tr>
			<tr><td>3</td><td>Aqua</td><td>#00ffff</td><td style="background:#00ffff"></td></tr>
			<tr><td>4</td><td>Aquamarine</td><td>#7fffd4</td><td style="background:#7fffd4"></td></tr>
			<tr><td>5</td><td>Azure</td><td>#f0ffff</td><td style="background:#f0ffff"></td></tr>
			<tr id="b"><td colspan="4" class="with-background"></td></tr>
			<tr><td>6</td><td>Beige</td><td>#f5f5dc</td><td style="background:#f5f5dc"></td></tr>
			<tr><td>7</td><td>Bisque</td><td>#ffe4c4</td><td style="background:#ffe4c4"></td></tr>
			<tr><td>8</td><td>Black</td><td>#000000</td><td style="background:#000000"></td></tr>
			<tr><td>9</td><td>BlanchedAlmond</td><td>#ffebcd</td><td style="background:#ffebcd"></td></tr>
			<tr><td>10</td><td>Blue</td><td>#0000ff</td><td style="background:#0000ff"></td></tr>
			<tr><td>11</td><td>BlueViolet</td><td>#8a2be2</td><td style="background:#8a2be2"></td></tr>
			<tr><td>12</td><td>Brown</td><td>#a52a2a</td><td style="background:#a52a2a"></td></tr>
			<tr><td>13</td><td>BurlyWood</td><td>#deb887</td><td style="background:#deb887"></td></tr>
			<tr id="c"><td colspan="4" class="with-background"></td></tr>
			<tr><td>14</td><td>CadetBlue</td><td>#5f9ea0</td><td style="background:#5f9ea0"></td></tr>
			<tr><td>15</td><td>Chartreuse</td><td>#7fff00</td><td style="background:#7fff00"></td></tr>
			<tr><td>16</td><td>Chocolate</td><td>#d2691e</td><td style="background:#d2691e"></td></tr>
			<tr><td>17</td><td>Coral</td><td>#ff7f50</td><td style="background:#ff7f50"></td></tr>
			<tr><td>18</td><td>CornflowerBlue</td><td>#6495ed</td><td style="background:#6495ed"></td></tr>
			<tr><td>19</td><td>Cornsilk</td><td>#fff8dc</td><td style="background:#fff8dc"></td></tr>
			<tr><td>20</td><td>Crimson</td><td>#dc143c</td><td style="background:#dc143c"></td></tr>
			<tr><td>21</td><td>Cyan</td><td>#00ffff</td><td style="background:#00ffff"></td></tr>
			<tr id="d"><td colspan="4" class="with-background"></td></tr>
			<tr><td>22</td><td>DarkBlue</td><td>#00008b</td><td style="background:#00008b"></td></tr>
			<tr><td>23</td><td>DarkCyan</td><td>#008b8b</td><td style="background:#008b8b"></td></tr>
			<tr><td>24</td><td>DarkGoldenRod</td><td>#b8860b</td><td style="background:#b8860b"></td></tr>
			<tr><td>25</td><td>DarkGray</td><td>#a9a9a9</td><td style="background:#a9a9a9"></td></tr>
			<tr><td>26</td><td>DarkGreen</td><td>#006400</td><td style="background:#006400"></td></tr>
			<tr><td>27</td><td>DarkKhaki</td><td>#bdb76b</td><td style="background:#bdb76b"></td></tr>
			<tr><td>28</td><td>DarkMagenta</td><td>#8b008b</td><td style="background:#8b008b"></td></tr>
			<tr><td>29</td><td>DarkOliveGreen</td><td>#556b2f</td><td style="background:#556b2f"></td></tr>
			<tr><td>30</td><td>DarkOrange</td><td>#ff8c00</td><td style="background:#ff8c00"></td></tr>
			<tr><td>31</td><td>DarkOrchid</td><td>#9932cc</td><td style="background:#9932cc"></td></tr>
			<tr><td>32</td><td>DarkRed</td><td>#8b0000</td><td style="background:#8b0000"></td></tr>
			<tr><td>33</td><td>DarkSalmon</td><td>#e9967a</td><td style="background:#e9967a"></td></tr>
			<tr><td>34</td><td>DarkSeaGreen</td><td>#8fbc8f</td><td style="background:#8fbc8f"></td></tr>
			<tr><td>35</td><td>DarkSlateBlue</td><td>#483d8b</td><td style="background:#483d8b"></td></tr>
			<tr><td>36</td><td>DarkSlateGray</td><td>#2f4f4f</td><td style="background:#2f4f4f"></td></tr>
			<tr><td>37</td><td>DarkTurquoise</td><td>#00ced1</td><td style="background:#00ced1"></td></tr>
			<tr><td>38</td><td>DarkViolet</td><td>#9400d3</td><td style="background:#9400d3"></td></tr>
			<tr><td>39</td><td>DeepPink</td><td>#ff1493</td><td style="background:#ff1493"></td></tr>
			<tr><td>40</td><td>DeepSkyBlue</td><td>#00bfff</td><td style="background:#00bfff"></td></tr>
			<tr><td>41</td><td>DimGray</td><td>#696969</td><td style="background:#696969"></td></tr>
			<tr><td>42</td><td>DodgerBlue</td><td>#1e90ff</td><td style="background:#1e90ff"></td></tr>
			<tr id="f"><td colspan="4" class="with-background"></td></tr>
			<tr><td>43</td><td>FireBrick</td><td>#b22222</td><td style="background:#b22222"></td></tr>
			<tr><td>44</td><td>FloralWhite</td><td>#fffaf0</td><td style="background:#fffaf0"></td></tr>
			<tr><td>45</td><td>ForestGreen</td><td>#228b22</td><td style="background:#228b22"></td></tr>
			<tr><td>46</td><td>Fuchsia</td><td>#ff00ff</td><td style="background:#ff00ff"></td></tr>
			<tr id="g"><td colspan="4" class="with-background"></td></tr>
			<tr><td>47</td><td>Gainsboro</td><td>#dcdcdc</td><td style="background:#dcdcdc"></td></tr>
			<tr><td>48</td><td>GhostWhite</td><td>#f8f8ff</td><td style="background:#f8f8ff"></td></tr>
			<tr><td>49</td><td>Gold</td><td>#ffd700</td><td style="background:#ffd700"></td></tr>
			<tr><td>50</td><td>GoldenRod</td><td>#daa520</td><td style="background:#daa520"></td></tr>
			<tr><td>51</td><td>Gray</td><td>#808080</td><td style="background:#808080"></td></tr>
			<tr><td>52</td><td>Green</td><td>#008000</td><td style="background:#008000"></td></tr>
			<tr><td>53</td><td>GreenYellow</td><td>#adff2f</td><td style="background:#adff2f"></td></tr>
			<tr id="h"><td colspan="4" class="with-background"></td></tr>
			<tr><td>54</td><td>HoneyDew</td><td>#f0fff0</td><td style="background:#f0fff0"></td></tr>
			<tr><td>55</td><td>HotPink</td><td>#ff69b4</td><td style="background:#ff69b4"></td></tr>
			<tr id="i"><td colspan="4" class="with-background"></td></tr>
			<tr><td>56</td><td>IndianRed</td><td>#cd5c5c</td><td style="background:#cd5c5c"></td></tr>
			<tr><td>57</td><td>Indigo</td><td>#4b0082</td><td style="background:#4b0082"></td></tr>
			<tr><td>58</td><td>Ivory</td><td>#fffff0</td><td style="background:#fffff0"></td></tr>
			<tr id="k"><td colspan="4" class="with-background"></td></tr>
			<tr><td>59</td><td>Khaki</td><td>#f0e68c</td><td style="background:#f0e68c"></td></tr>
			<tr id="l"><td colspan="4" class="with-background"></td></tr>
			<tr><td>60</td><td>Lavender</td><td>#e6e6fa</td><td style="background:#e6e6fa"></td></tr>
			<tr><td>61</td><td>LavenderBlush</td><td>#fff0f5</td><td style="background:#fff0f5"></td></tr>
			<tr><td>62</td><td>LawnGreen</td><td>#7cfc00</td><td style="background:#7cfc00"></td></tr>
			<tr><td>63</td><td>LemonChiffon</td><td>#fffacd</td><td style="background:#fffacd"></td></tr>
			<tr><td>64</td><td>LightBlue</td><td>#add8e6</td><td style="background:#add8e6"></td></tr>
			<tr><td>65</td><td>LightCoral</td><td>#f08080</td><td style="background:#f08080"></td></tr>
			<tr><td>66</td><td>LightCyan</td><td>#e0ffff</td><td style="background:#e0ffff"></td></tr>
			<tr><td>67</td><td>LightGoldenRodYellow</td><td>#fafad2</td><td style="background:#fafad2"></td></tr>
			<tr><td>68</td><td>LightGray</td><td>#d3d3d3</td><td style="background:#d3d3d3"></td></tr>
			<tr><td>69</td><td>LightGreen</td><td>#90ee90</td><td style="background:#90ee90"></td></tr>
			<tr><td>70</td><td>LightPink</td><td>#ffb6c1</td><td style="background:#ffb6c1"></td></tr>
			<tr><td>71</td><td>LightSalmon</td><td>#ffa07a</td><td style="background:#ffa07a"></td></tr>
			<tr><td>72</td><td>LightSeaGreen</td><td>#20b2aa</td><td style="background:#20b2aa"></td></tr>
			<tr><td>73</td><td>LightSkyBlue</td><td>#87cefa</td><td style="background:#87cefa"></td></tr>
			<tr><td>74</td><td>LightSlateGray</td><td>#778899</td><td style="background:#778899"></td></tr>
			<tr><td>75</td><td>LightSteelBlue</td><td>#b0c4de</td><td style="background:#b0c4de"></td></tr>
			<tr><td>76</td><td>LightYellow</td><td>#ffffe0</td><td style="background:#ffffe0"></td></tr>
			<tr><td>77</td><td>Lime</td><td>#00ff00</td><td style="background:#00ff00"></td></tr>
			<tr><td>78</td><td>LimeGreen</td><td>#32cd32</td><td style="background:#32cd32"></td></tr>
			<tr><td>79</td><td>Linen</td><td>#faf0e6</td><td style="background:#faf0e6"></td></tr>
			<tr id="m"><td colspan="4" class="with-background"></td></tr>
			<tr><td>80</td><td>Magenta</td><td>#ff00ff</td><td style="background:#ff00ff"></td></tr>
			<tr><td>81</td><td>Maroon</td><td>#800000</td><td style="background:#800000"></td></tr>
			<tr><td>82</td><td>MediumAquaMarine</td><td>#66cdaa</td><td style="background:#66cdaa"></td></tr>
			<tr><td>83</td><td>MediumBlue</td><td>#0000cd</td><td style="background:#0000cd"></td></tr>
			<tr><td>84</td><td>MediumOrchid</td><td>#ba55d3</td><td style="background:#ba55d3"></td></tr>
			<tr><td>85</td><td>MediumPurple</td><td>#9370db</td><td style="background:#9370db"></td></tr>
			<tr><td>86</td><td>MediumSeaGreen</td><td>#3cb371</td><td style="background:#3cb371"></td></tr>
			<tr><td>87</td><td>MediumSlateBlue</td><td>#7b68ee</td><td style="background:#7b68ee"></td></tr>
			<tr><td>88</td><td>MediumSpringGreen</td><td>#00fa9a</td><td style="background:#00fa9a"></td></tr>
			<tr><td>89</td><td>MediumTurquoise</td><td>#48d1cc</td><td style="background:#48d1cc"></td></tr>
			<tr><td>90</td><td>MediumVioletRed</td><td>#c71585</td><td style="background:#c71585"></td></tr>
			<tr><td>91</td><td>MidnightBlue</td><td>#191970</td><td style="background:#191970"></td></tr>
			<tr><td>92</td><td>MintCream</td><td>#f5fffa</td><td style="background:#f5fffa"></td></tr>
			<tr><td>93</td><td>MistyRose</td><td>#ffe4e1</td><td style="background:#ffe4e1"></td></tr>
			<tr><td>94</td><td>Moccasin</td><td>#ffe4b5</td><td style="background:#ffe4b5"></td></tr>
			<tr id="n"><td colspan="4" class="with-background"></td></tr>
			<tr><td>95</td><td>NavajoWhite</td><td>#ffdead</td><td style="background:#ffdead"></td></tr>
			<tr><td>96</td><td>Navy</td><td>#000080</td><td style="background:#000080"></td></tr>
			<tr id="o"><td colspan="4" class="with-background"></td></tr>
			<tr><td>97</td><td>OldLace</td><td>#fdf5e6</td><td style="background:#fdf5e6"></td></tr>
			<tr><td>98</td><td>Olive</td><td>#808000</td><td style="background:#808000"></td></tr>
			<tr><td>99</td><td>OliveDrab</td><td>#6b8e23</td><td style="background:#6b8e23"></td></tr>
			<tr><td>100</td><td>Orange</td><td>#ffa500</td><td style="background:#ffa500"></td></tr>
			<tr><td>101</td><td>OrangeRed</td><td>#ff4500</td><td style="background:#ff4500"></td></tr>
			<tr><td>102</td><td>Orchid</td><td>#da70d6</td><td style="background:#da70d6"></td></tr>
			<tr id="p"><td colspan="4" class="with-background"></td></tr>
			<tr><td>103</td><td>PaleGoldenRod</td><td>#eee8aa</td><td style="background:#eee8aa"></td></tr>
			<tr><td>104</td><td>PaleGreen</td><td>#98fb98</td><td style="background:#98fb98"></td></tr>
			<tr><td>105</td><td>PaleTurquoise</td><td>#afeeee</td><td style="background:#afeeee"></td></tr>
			<tr><td>106</td><td>PaleVioletRed</td><td>#db7093</td><td style="background:#db7093"></td></tr>
			<tr><td>107</td><td>PapayaWhip</td><td>#ffefd5</td><td style="background:#ffefd5"></td></tr>
			<tr><td>108</td><td>PeachPuff</td><td>#ffdab9</td><td style="background:#ffdab9"></td></tr>
			<tr><td>109</td><td>Peru</td><td>#cd853f</td><td style="background:#cd853f"></td></tr>
			<tr><td>110</td><td>Pink</td><td>#ffc0cb</td><td style="background:#ffc0cb"></td></tr>
			<tr><td>111</td><td>Plum</td><td>#dda0dd</td><td style="background:#dda0dd"></td></tr>
			<tr><td>112</td><td>PowderBlue</td><td>#b0e0e6</td><td style="background:#b0e0e6"></td></tr>
			<tr><td>113</td><td>Purple</td><td>#800080</td><td style="background:#800080"></td></tr>
			<tr id="r"><td colspan="4" class="with-background"></td></tr>
			<tr><td>114</td><td>Red</td><td>#ff0000</td><td style="background:#ff0000"></td></tr>
			<tr><td>115</td><td>RosyBrown</td><td>#bc8f8f</td><td style="background:#bc8f8f"></td></tr>
			<tr><td>116</td><td>RoyalBlue</td><td>#4169e1</td><td style="background:#4169e1"></td></tr>
			<tr id="s"><td colspan="4" class="with-background"></td></tr>
			<tr><td>117</td><td>SaddleBrown</td><td>#8b4513</td><td style="background:#8b4513"></td></tr>
			<tr><td>118</td><td>Salmon</td><td>#fa8072</td><td style="background:#fa8072"></td></tr>
			<tr><td>119</td><td>SandyBrown</td><td>#f4a460</td><td style="background:#f4a460"></td></tr>
			<tr><td>120</td><td>SeaGreen</td><td>#2e8b57</td><td style="background:#2e8b57"></td></tr>
			<tr><td>121</td><td>SeaShell</td><td>#fff5ee</td><td style="background:#fff5ee"></td></tr>
			<tr><td>122</td><td>Sienna</td><td>#a0522d</td><td style="background:#a0522d"></td></tr>
			<tr><td>123</td><td>Silver</td><td>#c0c0c0</td><td style="background:#c0c0c0"></td></tr>
			<tr><td>124</td><td>SkyBlue</td><td>#87ceeb</td><td style="background:#87ceeb"></td></tr>
			<tr><td>125</td><td>SlateBlue</td><td>#6a5acd</td><td style="background:#6a5acd"></td></tr>
			<tr><td>126</td><td>SlateGray</td><td>#708090</td><td style="background:#708090"></td></tr>
			<tr><td>127</td><td>Snow</td><td>#fffafa</td><td style="background:#fffafa"></td></tr>
			<tr><td>128</td><td>SpringGreen</td><td>#00ff7f</td><td style="background:#00ff7f"></td></tr>
			<tr><td>129</td><td>SteelBlue</td><td>#4682b4</td><td style="background:#4682b4"></td></tr>
			<tr id="t"><td colspan="4" class="with-background"></td></tr>
			<tr><td>130</td><td>Tan</td><td>#d2b48c</td><td style="background:#d2b48c"></td></tr>
			<tr><td>131</td><td>Teal</td><td>#008080</td><td style="background:#008080"></td></tr>
			<tr><td>132</td><td>Thistle</td><td>#d8bfd8</td><td style="background:#d8bfd8"></td></tr>
			<tr><td>133</td><td>Tomato</td><td>#ff6347</td><td style="background:#ff6347"></td></tr>
			<tr><td>134</td><td>Turquoise</td><td>#40e0d0</td><td style="background:#40e0d0"></td></tr>
			<tr id="v"><td colspan="4" class="with-background"></td></tr>
			<tr><td>135</td><td>Violet</td><td>#ee82ee</td><td style="background:#ee82ee"></td></tr>
			<tr id="w"><td colspan="4" class="with-background"></td></tr>
			<tr><td>136</td><td>Wheat</td><td>#f5deb3</td><td style="background:#f5deb3"></td></tr>
			<tr><td>137</td><td>White</td><td>#ffffff</td><td style="background:#ffffff"></td></tr>
			<tr><td>138</td><td>WhiteSmoke</td><td>#f5f5f5</td><td style="background:#f5f5f5"></td></tr>
			<tr id="y"><td colspan="4" class="with-background"></td></tr>
			<tr><td>139</td><td>Yellow</td><td>#ffff00</td><td style="background:#ffff00"></td></tr>
			<tr><td>140</td><td>YellowGreen</td><td>#9acd32</td><td style="background:#9acd32"></td></tr>
TEXT;


// <td>#bdb76b</td>
echo "<h1>Start</h1>";

$pattern = "~<td>(#[a-z\d]{6})~ui"; 
preg_match_all($pattern, $text, $rs);
$sv = file_put_contents('all_colors.json',json_encode($rs[1]));

echo Debug::d($rs);


?>