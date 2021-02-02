<?php include("cabecalho.php"); ?>

<script type="text/javascript">alert('Página em construção!');</script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable( {
			responsive: true
		} );
	} );

</script>
<div class="container">
	<br>
	<div class="table-responsive">
		<h3 align="center">APOSENTADORIAS HOMOLOGADAS</h3>
		<table id="myTable" class="table table-striped table-bordered" style="width:100%">
			<thead>
				<tr>
					<th>QTD</th>
					<th>Mês</th>
					<th>Nome</th>
					<th>Aposentadoria</th>
					<th>Cargo</th>
					<th>Acórdão</th>
					<th>Data do Diário
					Eletrônico</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Julho</td>
					<td>Maria das Graças Barros da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>1.605/2017</td>
					<td>10-16-17</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Agosto</td>
					<td>João Rodrigues Teles</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>1.608/2017</td>
					<td>10-16-17</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Junho</td>
					<td>Terezinha de Jesus Souza Gomes</td>
					<td>Tempo de contribuição</td>
					<td>Merendeira</td>
					<td>1.672/2017</td>
					<td>10-25-17</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Outubro</td>
					<td>Maria Luiza Dias Lopes</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>1.730/2017</td>
					<td>11-09-17</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Outubro</td>
					<td>Maria do Socorro Gomes da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>1.749/2017</td>
					<td>11-21-17</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Outubro</td>
					<td>Sandra Maria Gonçalves Carneiro</td>
					<td>Tempo de contribuição</td>
					<td>Merendeira</td>
					<td>1.748/2017</td>
					<td>11-21-17</td>
				</tr>
				<tr>
					<td>7</td>
					<td>Outubro</td>
					<td>Maria Neide Jardim</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>1.734/2017</td>
					<td>11-23-17</td>
				</tr>
				<tr>
					<td>8</td>
					<td>Maio</td>
					<td>Maria do Carmo Ferreira da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Merendeira</td>
					<td>1.774/2018</td>
					<td>02-13-18</td>
				</tr>
				<tr>
					<td>9</td>
					<td>Novembro</td>
					<td>Odorica de Souza Lima Guimarães</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>1.479/2017</td>
					<td>02-19-18</td>
				</tr>
				<tr>
					<td>10</td>
					<td>Fevereiro</td>
					<td>Biail de Jesus Ferreira da Rocha</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>1.612/2018</td>
					<td>04-02-18</td>
				</tr>
				<tr>
					<td>11</td>
					<td>Fevereiro</td>
					<td>Maria das Graças Evangelista de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.208/2019</td>
					<td>03-15-19</td>
				</tr>
				<tr>
					<td>12</td>
					<td>Fevereiro</td>
					<td>Joscilene Gomes de Azevedo</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>2.211/2019</td>
					<td>03-15-19</td>
				</tr>
				<tr>
					<td>13</td>
					<td>Fevereiro</td>
					<td>Francisco Eliudo Barros de Mesquita</td>
					<td> Invalidez</td>
					<td>Vigia</td>
					<td>2.225/2019</td>
					<td>03-19-19</td>
				</tr>
				<tr>
					<td>14</td>
					<td>Fevereiro</td>
					<td>Maria Jose Holanda Kalid</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.222/2019</td>
					<td>03-20-19</td>
				</tr>
				<tr>
					<td>15</td>
					<td>Março</td>
					<td>Odete de Lima Lins</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.239/2019</td>
					<td>04-02-19</td>
				</tr>
				<tr>
					<td>16</td>
					<td>Março</td>
					<td>Maria Ferreira de Araujo</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>2.241/2019</td>
					<td>04-08-19</td>
				</tr>
				<tr>
					<td>17</td>
					<td>Março</td>
					<td>Maria do Socorro Costa Brasil</td>
					<td>Invalidez</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.242/2019</td>
					<td>04-08-19</td>
				</tr>
				<tr>
					<td>18</td>
					<td>Março</td>
					<td>Alberly Castro Porto de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>2.243/2019</td>
					<td>04-08-19</td>
				</tr>
				<tr>
					<td>19</td>
					<td>Maio</td>
					<td>Maria Luiza Castro Gomes</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.274/2019</td>
					<td>05-08-19</td>
				</tr>
				<tr>
					<td>20</td>
					<td>Abril</td>
					<td>Nair Nogueira Pinto</td>
					<td> Idade</td>
					<td>Servente Contínuo</td>
					<td>2.224/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>21</td>
					<td>Abril</td>
					<td>Raimunda Inácio da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.205/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>22</td>
					<td>Abril</td>
					<td>Francisco Gomes de Lira</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.204/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>23</td>
					<td>Abril</td>
					<td>Rosilene Souza do Vale</td>
					<td> Invalidez</td>
					<td>Inspetor de Alunos</td>
					<td>2.223/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>24</td>
					<td>Abril</td>
					<td>Regina Coeli de Souza Rocha</td>
					<td> Invalidez</td>
					<td>Professor</td>
					<td>2.221/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>25</td>
					<td>Abril</td>
					<td>Marina de Oliveira Maia</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>2.194/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>26</td>
					<td>Abril</td>
					<td>Maria de Fatima da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>2.195/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>27</td>
					<td>Abril</td>
					<td>Maria da Conceição Lima dos Santos</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>2.219/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>28</td>
					<td>Abril</td>
					<td>Maria Madalena Torres do Nascimento</td>
					<td>Tempo de contribuição</td>
					<td>Servente Contínuo</td>
					<td>2.222/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>29</td>
					<td>Abril</td>
					<td>Antonia Magalhaes Moreira</td>
					<td>Tempo de contribuição</td>
					<td>Merendeira</td>
					<td>2.225/2019</td>
					<td>05-20-19</td>
				</tr>
				<tr>
					<td>30</td>
					<td>Abril</td>
					<td>Edison Rodrigues de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Oficial Administrativo</td>
					<td>2.269/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>31</td>
					<td>Abril</td>
					<td>Daniel Alves de Figueiredo</td>
					<td>Tempo de contribuição</td>
					<td>Vigia</td>
					<td>2.268/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>32</td>
					<td>Abril</td>
					<td>Maria Valdecir Sousa da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo</td>
					<td>2.267/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>33</td>
					<td>Abril</td>
					<td>Osvaldo da Costa Bastos</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>2.266/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>34</td>
					<td>Abril</td>
					<td>Edilha Gonçalves de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>2.265/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>35</td>
					<td>Abril</td>
					<td>Gianni Maria Rodrigues da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Aluno</td>
					<td>2.263/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>36</td>
					<td>Abril</td>
					<td>Maria de Fátima Lameira</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.262/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>37</td>
					<td>Abril</td>
					<td>Maria Nilza Gonçalves de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo</td>
					<td>2.261/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>38</td>
					<td>Abril</td>
					<td>Damiana Tuanama de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>2.260/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>39</td>
					<td>Abril</td>
					<td>Manoel Wilmar de Oliveira</td>
					<td> Idade</td>
					<td>Gari</td>
					<td>2.259/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>40</td>
					<td>Abril</td>
					<td>Maria Auxiliadora Ferreira de Sales</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.258/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>41</td>
					<td>Abril</td>
					<td>Almiragem Magalhães da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo</td>
					<td>2.257/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>42</td>
					<td>Abril</td>
					<td>Francisco Moreira da Silva</td>
					<td> Invalidez</td>
					<td>Gari</td>
					<td>2.256/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>43</td>
					<td>Abril</td>
					<td>Marfisa de Queiroz Melo</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>2.255/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>44</td>
					<td>Abril</td>
					<td>Lucinda Vieira Dias</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.254/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>45</td>
					<td>Abril</td>
					<td>Francisca Marques Feitosa</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo</td>
					<td>2.251/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>46</td>
					<td>Abril</td>
					<td>Aldenira Ripardo de Rocha</td>
					<td>Tempo de contribuição</td>
					<td>Inspetora de Aluno</td>
					<td>2.252/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>47</td>
					<td>Abril</td>
					<td>Maria de Nazaré da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo</td>
					<td>2.250/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>48</td>
					<td>Abril</td>
					<td>Glaydes Fernandes de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.249/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>49</td>
					<td>Abril</td>
					<td>Sebastiana Vieira da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo</td>
					<td>2.247/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>50</td>
					<td>Abril</td>
					<td>Denise Silveira de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Oficial Administrativo</td>
					<td>2.228/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>51</td>
					<td>Maio</td>
					<td>Adelina Alves Ferreira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.271/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>52</td>
					<td>Maio</td>
					<td>João Alves da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Vigia</td>
					<td>2.272/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>53</td>
					<td>Maio</td>
					<td>Miguel Brasiliano da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Motorista</td>
					<td>2.273/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>54</td>
					<td>Maio</td>
					<td>Tereza Rufino Areal</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo</td>
					<td>2.275/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>55</td>
					<td>Maio</td>
					<td>Maria de Nazaré da Silva Barbosa</td>
					<td>Tempo de contribuição</td>
					<td>Zelador</td>
					<td>2.276/2019</td>
					<td>05-24-19</td>
				</tr>
				<tr>
					<td>56</td>
					<td>Abril</td>
					<td>Maria de Fátima Alcântara Teles</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.264/2019</td>
					<td>06-07-19</td>
				</tr>
				<tr>
					<td>57</td>
					<td>Abril</td>
					<td>João Batista Vaz de Lira</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.248/2019</td>
					<td>06-13-19</td>
				</tr>
				<tr>
					<td>58</td>
					<td>Maio</td>
					<td>Roseni Israel Lira</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.240/2019</td>
					<td>07-02-19</td>
				</tr>
				<tr>
					<td>59</td>
					<td>Maio</td>
					<td>Dirce Mota Coelho</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.241/2019</td>
					<td>07-02-19</td>
				</tr>
				<tr>
					<td>60</td>
					<td>Maio</td>
					<td>Jose Teixeira da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Motorista</td>
					<td>2.245/2019</td>
					<td>07-02-19</td>
				</tr>
				<tr>
					<td>61</td>
					<td>Maio</td>
					<td>Maria Monteiro da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Merendeira</td>
					<td>2.244/2019</td>
					<td>07-11-19</td>
				</tr>
				<tr>
					<td>62</td>
					<td>Junho</td>
					<td>Maria Gracione Azevedo do Nascimento</td>
					<td>Invalidez</td>
					<td>Merendeira</td>
					<td>2.282/2019</td>
					<td>07-16-19</td>
				</tr>
				<tr>
					<td>63</td>
					<td>Junho</td>
					<td>Regina Norma de Araujo Rosasa</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.283/2019</td>
					<td>07-16-19</td>
				</tr>
				<tr>
					<td>64</td>
					<td>Junho</td>
					<td>Helia Barros dos Santos</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo</td>
					<td>2.284/2019</td>
					<td>07-16-19</td>
				</tr>
				<tr>
					<td>65</td>
					<td>Junho</td>
					<td>Francinete Ferreira da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo </td>
					<td>2.285/2019</td>
					<td>07-16-19</td>
				</tr>
				<tr>
					<td>66</td>
					<td>Junho</td>
					<td>Sonia Maria Teixeira de Morais</td>
					<td>Invalidez</td>
					<td>Servente Continuo</td>
					<td>2.286/2019</td>
					<td>07-16-19</td>
				</tr>
				<tr>
					<td>67</td>
					<td>Junho</td>
					<td>Juliana Fontes Cavalcante</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.287/2019</td>
					<td>07-16-19</td>
				</tr>
				<tr>
					<td>68</td>
					<td>Junho</td>
					<td>Manoel Freire Lima</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.288/2019</td>
					<td>07-16-19</td>
				</tr>
				<tr>
					<td>69</td>
					<td>Junho</td>
					<td>Maria das Graças Lima da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Zeladora</td>
					<td>2.292/2019</td>
					<td>07-17-19</td>
				</tr>
				<tr>
					<td>70</td>
					<td>Junho</td>
					<td>Paulo Germano Cavalcanti Amorim Soares</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.293/2019</td>
					<td>07-17-19</td>
				</tr>
				<tr>
					<td>71</td>
					<td>Junho</td>
					<td>Sonia Cardoso de Lima</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.296/2019</td>
					<td>07-17-19</td>
				</tr>
				<tr>
					<td>72</td>
					<td>Junho</td>
					<td>Maria Ivanise Nunes da Rocha</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.297/2019</td>
					<td>07-17-19</td>
				</tr>
				<tr>
					<td>73</td>
					<td>abril</td>
					<td>Maria Missionaria Gomes</td>
					<td>Tempo de contribuição</td>
					<td>Servente Continuo </td>
					<td>2.229/2019</td>
					<td>07-26-19</td>
				</tr>
				<tr>
					<td>74</td>
					<td>Julho</td>
					<td>Terezinha Prado de Aguiar</td>
					<td>Idade</td>
					<td>Professor P2</td>
					<td>2.304/2019</td>
					<td>07-31-19</td>
				</tr>
				<tr>
					<td>75</td>
					<td>Julho</td>
					<td>Edilene Trindade Mendonça</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.305/2019</td>
					<td>07-31-19</td>
				</tr>
				<tr>
					<td>76</td>
					<td>Julho</td>
					<td>Maria Jose Sampaio de Araujo</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.306/2019</td>
					<td>08-01-19</td>
				</tr>
				<tr>
					<td>77</td>
					<td>Julho</td>
					<td>Ana Valeria Felix de Pinho</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.307/2019</td>
					<td>08-01-19</td>
				</tr>
				<tr>
					<td>78</td>
					<td>Julho</td>
					<td>Claudionor Barros Silva</td>
					<td>Invalidez</td>
					<td>Inspetor de Alunos</td>
					<td>2.308/2019</td>
					<td>08-01-19</td>
				</tr>
				<tr>
					<td>79</td>
					<td>Julho</td>
					<td>Rita de Cassia Machado Monnerat</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.309/2019</td>
					<td>08-01-19</td>
				</tr>
				<tr>
					<td>80</td>
					<td>Julho</td>
					<td>Vanya Regina Rodrigues da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.335/2019</td>
					<td>08-01-19</td>
				</tr>
				<tr>
					<td>81</td>
					<td>Julho</td>
					<td>Ivanete Carlos Nascimento</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.339/2019</td>
					<td>08-01-19</td>
				</tr>
				<tr>
					<td>82</td>
					<td>Julho</td>
					<td>Zaurinez Carvalho de Mesquita</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.336/2019</td>
					<td>08-02-19</td>
				</tr>
				<tr>
					<td>83</td>
					<td>Julho</td>
					<td>Regina Lima da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.337/2019</td>
					<td>08-02-19</td>
				</tr>
				<tr>
					<td>84</td>
					<td>Julho</td>
					<td>Maria Adelma Sales Lima de Almeida</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.338/2019</td>
					<td>08-02-19</td>
				</tr>
				<tr>
					<td>85</td>
					<td>Julho</td>
					<td>Maria Vilma Brito do Nascimento</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.264/2019</td>
					<td>08-22-19</td>
				</tr>
				<tr>
					<td>86</td>
					<td>Junho</td>
					<td>Marly Araújo do Nascimento Coelho</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.267/2019</td>
					<td>08-22-19</td>
				</tr>
				<tr>
					<td>87</td>
					<td>Junho</td>
					<td>Diogo da Silva Vila Nova</td>
					<td>Pensão</td>
					<td>2.268/2019</td>
					<td>08-22-19</td>
				</tr>
				<tr>
					<td>88</td>
					<td>Julho</td>
					<td>Maria da Gloria Gomes de Azevedo</td>
					<td>Tempo de contribuição</td>
					<td>Merendeira</td>
					<td>2.315/2019</td>
					<td>08-23-19</td>
				</tr>
				<tr>
					<td>89</td>
					<td>Julho</td>
					<td>Virgilio Esteves de Lima Neto</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.316/2019</td>
					<td>08-23-19</td>
				</tr>
				<tr>
					<td>90</td>
					<td>Julho</td>
					<td>Aurea Barbosa de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.317/2019</td>
					<td>08-23-19</td>
				</tr>
				<tr>
					<td>91</td>
					<td>Julho</td>
					<td>Audeneide de Lima Guimarães</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.318/2019</td>
					<td>08-23-19</td>
				</tr>
				<tr>
					<td>92</td>
					<td>Julho</td>
					<td>João Sena Matias</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.319/2019</td>
					<td>08-23-19</td>
				</tr>
				<tr>
					<td>93</td>
					<td>Julho</td>
					<td>Silvana Lourenço Faria</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.320/2019</td>
					<td>08-26-19</td>
				</tr>
				<tr>
					<td>94</td>
					<td>Julho</td>
					<td>Toshiko Komatsu Lima</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.321/2019</td>
					<td>08-26-19</td>
				</tr>
				<tr>
					<td>95</td>
					<td>Julho</td>
					<td>Judite Amancio de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.357/2019</td>
					<td>08-26-19</td>
				</tr>
				<tr>
					<td>96</td>
					<td>Julho</td>
					<td>Gladys Norma Salvaterra Mendes Batista</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.358/2019</td>
					<td>08-26-19</td>
				</tr>
				<tr>
					<td>97</td>
					<td>Agosto</td>
					<td>Maria Nubia Pereira dos Santos</td>
					<td>Invalidez</td>
					<td>Servente-Continuo</td>
					<td>2.346/2019</td>
					<td>08-28-19</td>
				</tr>
				<tr>
					<td>98</td>
					<td>Agosto</td>
					<td>Maria Ines de Oliveira Maia</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.347/2019</td>
					<td>08-28-19</td>
				</tr>
				<tr>
					<td>99</td>
					<td>Agosto</td>
					<td>Elias Oliveira Lima</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.348/2019</td>
					<td>08-28-19</td>
				</tr>
				<tr>
					<td>100</td>
					<td>Agosto</td>
					<td>Maria Rosalina Nascimento Melo</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.349/2019</td>
					<td>08-28-19</td>
				</tr>
				<tr>
					<td>101</td>
					<td>Agosto</td>
					<td>Nilza Barros de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.363/2019</td>
					<td>08-28-19</td>
				</tr>
				<tr>
					<td>102</td>
					<td>Agosto</td>
					<td>Maria de Lourdes Barbosa Braga</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.364/2019</td>
					<td>08-28-19</td>
				</tr>
				<tr>
					<td>103</td>
					<td>Agosto</td>
					<td>Maria Augusta de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.365/2019</td>
					<td>08-28-19</td>
				</tr>
				<tr>
					<td>104</td>
					<td>Setembro</td>
					<td>Aldione dos Reis Araujo Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.366/2019</td>
					<td>09-24-19</td>
				</tr>
				<tr>
					<td>105</td>
					<td>Setembro</td>
					<td>Ines Amancio de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.384/2019</td>
					<td>09-25-19</td>
				</tr>
				<tr>
					<td>106</td>
					<td>Setembro</td>
					<td>Mary Ribeiro Monteiro</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.386/2019</td>
					<td>09-25-19</td>
				</tr>
				<tr>
					<td>107</td>
					<td>Setembro</td>
					<td>Maria da Conceição da Silva Lima</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.387/2019</td>
					<td>09-25-19</td>
				</tr>
				<tr>
					<td>108</td>
					<td>Setembro</td>
					<td>Maria Felicia Felicio Andrade</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.388/2019</td>
					<td>09-25-19</td>
				</tr>
				<tr>
					<td>109</td>
					<td>Setembro</td>
					<td>Maria Socorro Kouri Sampaio</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.389/2019</td>
					<td>09-25-19</td>
				</tr>
				<tr>
					<td>110</td>
					<td>Setembro</td>
					<td>Leila Aparecida Felix</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.406/2019</td>
					<td>09-25-19</td>
				</tr>
				<tr>
					<td>111</td>
					<td>Setembro</td>
					<td>Maria Jeanett de sousa Esteves</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.407/2019</td>
					<td>09-25-19</td>
				</tr>
				<tr>
					<td>112</td>
					<td>Setembro</td>
					<td>Lucelia Nagão Gonçalves</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.330/2019</td>
					<td>10-16-19</td>
				</tr>
				<tr>
					<td>113</td>
					<td>Setembro</td>
					<td>Vilma Soares de Brito</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.331/2019</td>
					<td>10-16-19</td>
				</tr>
				<tr>
					<td>114</td>
					<td>Setembro</td>
					<td>Andreia Cristina Castro Romão</td>
					<td>Invalidez</td>
					<td>Professor P2</td>
					<td>2.332/2019</td>
					<td>10-16-19</td>
				</tr>
				<tr>
					<td>115</td>
					<td>Setembro</td>
					<td>Silvia Maria Lima Margarido</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.335/2019</td>
					<td>10-16-19</td>
				</tr>
				<tr>
					<td>116</td>
					<td>Setembro</td>
					<td>Antonia Santiago de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.333/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>117</td>
					<td>Setembro</td>
					<td>Eusanira Lira da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.334/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>118</td>
					<td>Setembro</td>
					<td>Maria de Lourdes Ribeiro Lima</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.336/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>119</td>
					<td>Setembro</td>
					<td>Waldirene Ribeiro</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.358/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>120</td>
					<td>Setembro</td>
					<td>Alianete Carneiro de Lima Fugiwara</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.377/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>121</td>
					<td>Setembro</td>
					<td>Natalicia Veras de Souza</td>
					<td>Pensão</td>
					<td>2.378/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>122</td>
					<td>Setembro</td>
					<td>Natal de Souza Chaves</td>
					<td>Invalidez</td>
					<td>Professor P2</td>
					<td>2.397/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>123</td>
					<td>Setembro</td>
					<td>Raimunda de Morais da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.398/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>124</td>
					<td>Setembro</td>
					<td>Maria de Lourdes Rogerio de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.400/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>125</td>
					<td>Setembro</td>
					<td>Martinho Ferreira de Lima</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.401/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>126</td>
					<td>Setembro</td>
					<td>Maria Lucia Silva de Moraes</td>
					<td>Invalidez</td>
					<td>Servente-Continuo</td>
					<td>2.402/2019</td>
					<td>10-31-19</td>
				</tr>
				<tr>
					<td>127</td>
					<td>Outubro</td>
					<td>Betila Machado Mogbel</td>
					<td>Idade</td>
					<td>Inspetora de Aluno</td>
					<td>2.421/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>128</td>
					<td>Outubro</td>
					<td>Maria Neves da Silva Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.422/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>129</td>
					<td>Outubro</td>
					<td>Vania Maia de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.423/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>130</td>
					<td>Outubro</td>
					<td>Maria Salete da Silva Cardozo</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.424/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>131</td>
					<td>Outubro</td>
					<td>Aurecilia Alves Paiva Ruela</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.425/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>132</td>
					<td>Outubro</td>
					<td>Maria Socorro do Nascimento Carioca</td>
					<td>Tempo de contribuição</td>
					<td>Escrituraria</td>
					<td>2.426/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>133</td>
					<td>Outubro</td>
					<td>Cecilia da Costa Araujo</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.427/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>134</td>
					<td>Outubro</td>
					<td>Menilce Antonia da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.428/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>135</td>
					<td>Outubro</td>
					<td>Mirtis Rezende</td>
					<td>Invalidez</td>
					<td>Professor</td>
					<td>2.436/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>136</td>
					<td>Outubro</td>
					<td>Cosmo Monteiro Bonifacio</td>
					<td>Invalidez</td>
					<td>Servente-Continuo</td>
					<td>2.437/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>137</td>
					<td>Outubro</td>
					<td>Maria Auxiliadora Graça de Mendonça</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.438/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>138</td>
					<td>Outubro</td>
					<td>Irene Florencio da Rocha Araujo</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.439/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>139</td>
					<td>Outubro</td>
					<td>Maria Cecilia Dantas de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.440/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>140</td>
					<td>Outubro</td>
					<td>Luzanira Ferreira de Araujo</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.443/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>141</td>
					<td>Outubro</td>
					<td>Raimundo Israel Lira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.444/2019</td>
					<td>11-11-19</td>
				</tr>
				<tr>
					<td>142</td>
					<td>Outubro</td>
					<td>Maria Lucia da Costa Amorim</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.454/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>143</td>
					<td>Outubro</td>
					<td>Maria Antonia do Vale Batalha</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.455/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>144</td>
					<td>Outubro</td>
					<td>Mariana Portela Cacau</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.456/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>145</td>
					<td>Outubro</td>
					<td>Maria de Fatima Freitas Lima</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.457/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>146</td>
					<td>Outubro</td>
					<td>Raimunda Olindina Pereira da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.458/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>147</td>
					<td>Outubro</td>
					<td>Orencia Oliveira dos Santos</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.459/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>148</td>
					<td>Outubro</td>
					<td>Lucia Maria Marinho Pereira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.460/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>149</td>
					<td>Outubro</td>
					<td>Maria Cordeiro de Mesquita</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.461/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>150</td>
					<td>Outubro</td>
					<td>Cleonice Rodrigues Duarte</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.462/2019</td>
					<td>11-13-19</td>
				</tr>
				<tr>
					<td>151</td>
					<td>Outubro</td>
					<td>Lusanete Lopes da Cunha</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.441/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>152</td>
					<td>Outubro</td>
					<td>Rosangela Fonseca Mendes</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.442/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>153</td>
					<td>Outubro</td>
					<td>Roberto de Paiva Dias</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.445/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>154</td>
					<td>Abril</td>
					<td>Lindalva da Silva de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo </td>
					<td>2.226/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>155</td>
					<td>Abril</td>
					<td>Raimunda Celia Pereira Craveiro</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.227/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>156</td>
					<td>Junho</td>
					<td>Nagila Maria Dourado de Carvalho</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.274/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>157</td>
					<td>Junho</td>
					<td>Benedito Barbosa</td>
					<td>Tempo de contribuição</td>
					<td>Motorista</td>
					<td>2.275/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>158</td>
					<td>Junho</td>
					<td>Nazir Lopes Pontes</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo </td>
					<td>2.276/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>159</td>
					<td>Junho</td>
					<td>Emerson Lopes de Medeiros</td>
					<td>Invalidez</td>
					<td>Professor P2</td>
					<td>2.277/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>160</td>
					<td>Junho</td>
					<td>Maria Bandeira de Paula</td>
					<td>Invalidez</td>
					<td>Oficial Administrativo</td>
					<td>2.279/2019</td>
					<td>11-20-19</td>
				</tr>
				<tr>
					<td>161</td>
					<td>Novembro</td>
					<td>Suely Lemos Basto de Oliveira Rosas</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.468/2019</td>
					<td>11-29-19</td>
				</tr>
				<tr>
					<td>162</td>
					<td>Novembro</td>
					<td>Sonia Chaves da Cruz Mendes</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.469/2019</td>
					<td>11-29-19</td>
				</tr>
				<tr>
					<td>163</td>
					<td>Novembro</td>
					<td>Raimunda de Araujo Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.470/2019</td>
					<td>11-29-19</td>
				</tr>
				<tr>
					<td>164</td>
					<td>Novembro</td>
					<td>Maria do Rosario Fares</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.471/2019</td>
					<td>11-29-19</td>
				</tr>
				<tr>
					<td>165</td>
					<td>Novembro</td>
					<td>Joelma Ferreira Franzini</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.472/2019</td>
					<td>11-29-19</td>
				</tr>
				<tr>
					<td>166</td>
					<td>Novembro</td>
					<td>Francima Rocha de Moura</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.473/2019</td>
					<td>11-29-19</td>
				</tr>
				<tr>
					<td>167</td>
					<td>Novembro</td>
					<td>Lucia da Silva Marques</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.474/2019</td>
					<td>12-06-19</td>
				</tr>
				<tr>
					<td>168</td>
					<td>Novembro</td>
					<td>João Batista dos Santos</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.475/2019</td>
					<td>12-06-19</td>
				</tr>
				<tr>
					<td>169</td>
					<td>Novembro</td>
					<td>Francisca Honorato dos bSantos</td>
					<td>Aposentadoria por idade </td>
					<td>Professor P1</td>
					<td>2.476/2019</td>
					<td>12-06-19</td>
				</tr>
				<tr>
					<td>170</td>
					<td>Novembro</td>
					<td>Leila Maria Vasconcelos do Nascimento</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.463/2019</td>
					<td>12-06-19</td>
				</tr>
				<tr>
					<td>171</td>
					<td>Novembro</td>
					<td>Edivaldo Rodrigues de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.464/2019</td>
					<td>12-06-19</td>
				</tr>
				<tr>
					<td>172</td>
					<td>Dezembro</td>
					<td>Ana Maria Agostinho Farias</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.485/2019</td>
					<td>01-10-20</td>
				</tr>
				<tr>
					<td>173</td>
					<td>Dezembro</td>
					<td>Francisca Oliveira do Nascimento</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.486/2019</td>
					<td>01-10-20</td>
				</tr>
				<tr>
					<td>174</td>
					<td>Dezembro</td>
					<td>Irineia do Carmo Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.487/2019</td>
					<td>01-10-20</td>
				</tr>
				<tr>
					<td>175</td>
					<td>Dezembro</td>
					<td>Raimundo de Oliveira Macedo</td>
					<td>Tempo de contribuição</td>
					<td>Vigia</td>
					<td>2.488/2019</td>
					<td>01-10-20</td>
				</tr>
				<tr>
					<td>176</td>
					<td>Dezembro</td>
					<td>Wanda Furuno da Silva Freitas</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.489/2019</td>
					<td>01-10-20</td>
				</tr>
				<tr>
					<td>177</td>
					<td>Dezembro</td>
					<td>Iraci Lopes do Nascimento</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.490/2019</td>
					<td>01-10-20</td>
				</tr>
				<tr>
					<td>178</td>
					<td>Outubro</td>
					<td>Maria almira Rocha da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.373/2019</td>
					<td>01-14-20</td>
				</tr>
				<tr>
					<td>179</td>
					<td>Outubro</td>
					<td>Cleonice Negreiros de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Técnica em Contabilidade</td>
					<td>2.375/2019</td>
					<td>01-14-20</td>
				</tr>
				<tr>
					<td>180</td>
					<td>Outubro</td>
					<td>José Sebastião Rodrigues</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.379/2019</td>
					<td>01-14-20</td>
				</tr>
				<tr>
					<td>181</td>
					<td>Dezembro</td>
					<td>Israel de Oliveira Lira</td>
					<td>Tempo de contribuição</td>
					<td>Motorista</td>
					<td>11.566/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>182</td>
					<td>Dezembro</td>
					<td>Maria Rocilene Vianan da Silva e Silva</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>11.567/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>183</td>
					<td>Dezembro</td>
					<td>Elisete Rodrigues Andrade</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>11.568/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>184</td>
					<td>Dezembro</td>
					<td>Zilda Nunes Moura</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>11.569/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>185</td>
					<td>Dezembro</td>
					<td>Maria Neves dos Santos Lourenço</td>
					<td>Invalidez</td>
					<td>Servente Continuo</td>
					<td>11.570/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>186</td>
					<td>Dezembro</td>
					<td>Antonia Bezerra de Menezes Magalhães</td>
					<td>Invalidez</td>
					<td>Servente-Continuo</td>
					<td>11.572/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>187</td>
					<td>Dezembro</td>
					<td>Marilza de Andrade Moreira Mateus</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>11.573/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>188</td>
					<td>Dezembro</td>
					<td>Maria de Nazare Cassiano Cunha</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>11.574/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>189</td>
					<td>Dezembro</td>
					<td>Francisca das Chagas de Sousa</td>
					<td> Idade</td>
					<td>Servente-Continuo</td>
					<td>11.575/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>190</td>
					<td>Dezembro</td>
					<td>Ira Alves da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>11.576/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>191</td>
					<td>Dezembro</td>
					<td>Damião Antonio Hamilton de Souza Barros</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.577/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>192</td>
					<td>Dezembro</td>
					<td>Zuila dos Santos Assef</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>11.578/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>193</td>
					<td>Dezembro</td>
					<td>Maria de Fatima de Araujo Cavalcante</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.579/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>194</td>
					<td>Dezembro</td>
					<td>Silsa Silva de Santana Pinto</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>11.580/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>195</td>
					<td>Dezembro</td>
					<td>Maria das Graças Assaid Mogbel</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.581/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>196</td>
					<td>Dezembro</td>
					<td>Maura Jane Leitão Santos de Almeida</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>11.582/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>197</td>
					<td>Dezembro</td>
					<td>Rozeneia Ferreira de Sousa</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.583/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>198</td>
					<td>Dezembro</td>
					<td>Edelquin Ferreiora da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>11.584/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>199</td>
					<td>Dezembro</td>
					<td>Mustafa Itani Cavalcante</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.585/2019</td>
					<td>01-30-20</td>
				</tr>
				<tr>
					<td>200</td>
					<td>Dezembro</td>
					<td>Francisca Maria Veras de Almeida</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.586/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>201</td>
					<td>Dezembro</td>
					<td>Maria Zuleide Nunes Valente</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.587/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>202</td>
					<td>Dezembro</td>
					<td>Maria Nazare Araujo de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>11.588/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>203</td>
					<td>Dezembro</td>
					<td>Maria de Nazare Ferreira Pontes</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.589/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>204</td>
					<td>Dezembro</td>
					<td>Getulio Maia de Alencar</td>
					<td>Tempo de contribuição</td>
					<td>Professor P1</td>
					<td>11.590/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>205</td>
					<td>Dezembro</td>
					<td>Maria Fatima de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.591/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>206</td>
					<td>Dezembro</td>
					<td>Izalmira Leite Alves</td>
					<td>Tempo de contribuição</td>
					<td>Tecnico de Contabilidade</td>
					<td>11.592/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>207</td>
					<td>Dezembro</td>
					<td>Nair Freitas de Aquino</td>
					<td>Invalidez</td>
					<td>Inspetor de Alunos</td>
					<td>11.593/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>208</td>
					<td>Dezembro</td>
					<td>Maria da Conceição de Oliveira Souza</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.594/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>209</td>
					<td>Dezembro</td>
					<td>Ruth Simão Lopes Ramos</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.595/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>210</td>
					<td>Setembro</td>
					<td>Margareth Rose Ramos de Macedo Cavalcanti</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.359/2019</td>
					<td>01-31-20</td>
				</tr>
				<tr>
					<td>211</td>
					<td>Dezembro</td>
					<td>Maria Jose da Silva Dias Mesquita</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.596/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>212</td>
					<td>Dezembro</td>
					<td>Rosenilda Evangelista Pacifico</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.597/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>213</td>
					<td>Dezembro</td>
					<td>Rizoneide Pereira Caminha</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.598/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>214</td>
					<td>Dezembro</td>
					<td>Regina Coeli de Souza Rocha</td>
					<td>Invalidez</td>
					<td>Professor P2</td>
					<td>11.599/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>215</td>
					<td>Dezembro</td>
					<td>Maria Ieidna Vilela dos Santos</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.600/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>216</td>
					<td>Dezembro</td>
					<td>Maria Gomes Ferro</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>11.601/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>217</td>
					<td>Dezembro</td>
					<td>Maria Dorotea da Silva Rocha</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.603/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>218</td>
					<td>Dezembro</td>
					<td>Olinda Gomes da Silva Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.604/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>219</td>
					<td>Dezembro</td>
					<td>Raimunda Lima da Costa</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>11.605/2019</td>
					<td>02-03-20</td>
				</tr>
				<tr>
					<td>220</td>
					<td>Junho</td>
					<td>Valdecir de Oliveira Fernandes</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.283/2019</td>
					<td>02-06-20</td>
				</tr>
				<tr>
					<td>221</td>
					<td>Junho</td>
					<td>Maria Gleiz de Melo Cordeiro</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.284/2019</td>
					<td>02-06-20</td>
				</tr>
				<tr>
					<td>222</td>
					<td>Novembro</td>
					<td>Darcilene Tufic Aiache</td>
					<td>Tempo de contribuição</td>
					<td>Professor P1</td>
					<td>2.396/2019</td>
					<td>02-06-20</td>
				</tr>
				<tr>
					<td>223</td>
					<td>Novembro</td>
					<td>Miracele Gomes da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.397/2019</td>
					<td>02-06-20</td>
				</tr>
				<tr>
					<td>224</td>
					<td>Novembro</td>
					<td>Denise Segovia de Araujo</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.400/2019</td>
					<td>02-06-20</td>
				</tr>
				<tr>
					<td>225</td>
					<td>Novembro</td>
					<td>Maria Jose de Almeida Felix</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.407/2019</td>
					<td>02-06-20</td>
				</tr>
				<tr>
					<td>226</td>
					<td>Outubro</td>
					<td>Juan de Dios Llanco Mamany</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.377/2019</td>
					<td>02-07-20</td>
				</tr>
				<tr>
					<td>227</td>
					<td>Outubro</td>
					<td>Claudia Amabely Machado Nobre</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.378/2019</td>
					<td>02-07-20</td>
				</tr>
				<tr>
					<td>228</td>
					<td>Outubro</td>
					<td>Maria das Graças de Andrade Lima</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.374/2019</td>
					<td>02-10-20</td>
				</tr>
				<tr>
					<td>229</td>
					<td>Dezembro</td>
					<td>Francisca Cristina Moura de Lima Boaventura</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.439/2019</td>
					<td>02-10-20</td>
				</tr>
				<tr>
					<td>230</td>
					<td>Novembro</td>
					<td>Mauricio Generozo de Oliveira Filho</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.394/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>231</td>
					<td>Novembro</td>
					<td>Maria da Conceição Ferreira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.395/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>232</td>
					<td>Novembro</td>
					<td>Jaqueline Araujo de Almeida</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.398/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>233</td>
					<td>Novembro</td>
					<td>Aldemir Simão de Goes</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>2.401/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>234</td>
					<td>Novembro</td>
					<td>Marilene Araujo da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.402/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>235</td>
					<td>Novembro</td>
					<td>Simone Rosana Lopes de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.404/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>236</td>
					<td>Novembro</td>
					<td>Izabel Cristina Moreno de Farias</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.405/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>237</td>
					<td>Novembro</td>
					<td>Maria Inez de Souza Eracio</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.406/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>238</td>
					<td>Novembro</td>
					<td>Antonia Santiago Barbosa</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.409/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>239</td>
					<td>Novembro</td>
					<td>Antonio Barros da Silva</td>
					<td>Invalidez</td>
					<td>Auditor Fiscal de Obras e Urbanismo</td>
					<td>2.413/2019</td>
					<td>02-11-20</td>
				</tr>
				<tr>
					<td>240</td>
					<td>Novembro</td>
					<td>Vera Lucia Ferreira da Cunha</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.399/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>241</td>
					<td>Novembro</td>
					<td>Francisca das Chagas Souza da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.410/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>242</td>
					<td>Novembro</td>
					<td>Geralda D'Avila do Nascimento</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.411/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>243</td>
					<td>Novembro</td>
					<td>Izabel Oliveira do Vale</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.412/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>244</td>
					<td>Novembro</td>
					<td>Valdirene Diogo de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.414/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>245</td>
					<td>Dezembro</td>
					<td>Antonio Jose Monteiro</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.435/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>246</td>
					<td>Dezembro</td>
					<td>Marlene da Silva Mota</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.437/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>247</td>
					<td>Dezembro</td>
					<td>Francinete de Souza Viana</td>
					<td>Invalidez</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.438/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>248</td>
					<td>Dezembro</td>
					<td>Andrea Chiste Fleming Leitão</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.445/2019</td>
					<td>02-12-20</td>
				</tr>
				<tr>
					<td>249</td>
					<td>Dezembro</td>
					<td>Maria das Graças Pereira da Silveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.676/2019</td>
					<td>02-17-20</td>
				</tr>
				<tr>
					<td>250</td>
					<td>Dezembro</td>
					<td>Maria Leides da Silva</td>
					<td>Aposentadoria por idade </td>
					<td>Auxiliar de Escritorio</td>
					<td>11.677/2019</td>
					<td>02-17-20</td>
				</tr>
				<tr>
					<td>251</td>
					<td>Dezembro</td>
					<td>Lucineide dos Santos Fontinele</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>11.679/2019</td>
					<td>02-17-20</td>
				</tr>
				<tr>
					<td>252</td>
					<td>Dezembro</td>
					<td>Suely Pereira de Souza</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.436/2019</td>
					<td>02-17-20</td>
				</tr>
				<tr>
					<td>253</td>
					<td>Dezembro</td>
					<td>Erika Roque Pinheiro</td>
					<td>Invalidez</td>
					<td>Professor P2</td>
					<td>2.440/2019</td>
					<td>02-17-20</td>
				</tr>
				<tr>
					<td>254</td>
					<td>Dezembro</td>
					<td>Marlucia de Sousa Melo Miranda</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.441/2019</td>
					<td>02-17-20</td>
				</tr>
				<tr>
					<td>255</td>
					<td>Dezembro</td>
					<td>Maria de Fatima Ferraz Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.444/2019</td>
					<td>02-17-20</td>
				</tr>
				<tr>
					<td>256</td>
					<td>Dezembro</td>
					<td>Francisca Moraes Sales</td>
					<td>Invalidez</td>
					<td>Professor P2</td>
					<td>2.442/2019</td>
					<td>02-18-20</td>
				</tr>
				<tr>
					<td>257</td>
					<td>Fevereiro</td>
					<td>Maria Rita Silva de Albuquerque</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.496/2020</td>
					<td>03-04-20</td>
				</tr>
				<tr>
					<td>258</td>
					<td>Fevereiro</td>
					<td>Maria do Socorro Mendonça dos Santos</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.497/2020</td>
					<td>03-04-20</td>
				</tr>
				<tr>
					<td>259</td>
					<td>Fevereiro</td>
					<td>Ivone Vitoriano de Abreu</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>2.498/2020</td>
					<td>03-04-20</td>
				</tr>
				<tr>
					<td>260</td>
					<td>Fevereiro</td>
					<td>Maria Cristina Carvalho Pinheiro</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.499/2020</td>
					<td>03-04-20</td>
				</tr>
				<tr>
					<td>261</td>
					<td>Fevereiro</td>
					<td>Crizelia Maria Assis de Andrade </td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.500/2020</td>
					<td>03-04-20</td>
				</tr>
				<tr>
					<td>262</td>
					<td>Fevereiro</td>
					<td>Maria das Dores Gomes Pereira</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.501/2020</td>
					<td>03-04-20</td>
				</tr>
				<tr>
					<td>263</td>
					<td>Fevereiro</td>
					<td>Maria Raimunda da Conceição Santos</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.502/2020</td>
					<td>03-04-20</td>
				</tr>
				<tr>
					<td>264</td>
					<td>Fevereiro</td>
					<td>Vania Barbosa da Costa</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.503/2020</td>
					<td>03-04-20</td>
				</tr>
				<tr>
					<td>265</td>
					<td>Janeiro</td>
					<td>Marizete Vieira Lameira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.467/2020</td>
					<td>03-09-20</td>
				</tr>
				<tr>
					<td>266</td>
					<td>Janeiro</td>
					<td>Emilia Bessa de Holanda</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.468/2020</td>
					<td>03-09-20</td>
				</tr>
				<tr>
					<td>267</td>
					<td>Janeiro</td>
					<td>Francisca Temoteo dos Santos</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.469/2020</td>
					<td>03-09-20</td>
				</tr>
				<tr>
					<td>268</td>
					<td>Janeiro</td>
					<td>Denise Fecury Bezerra Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.470/2020</td>
					<td>03-09-20</td>
				</tr>
				<tr>
					<td>269</td>
					<td>Fevereiro</td>
					<td>Maria Ilza de Melo</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>2.477/2020</td>
					<td>03-09-20</td>
				</tr>
				<tr>
					<td>270</td>
					<td>Fevereiro</td>
					<td>Tania Maria Alves da Cunha</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.478/2020</td>
					<td>03-09-20</td>
				</tr>
				<tr>
					<td>271</td>
					<td>Fevereiro</td>
					<td>Maria Nazare de Souza Cunha</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>2.479/2020</td>
					<td>03-09-20</td>
				</tr>
				<tr>
					<td>272</td>
					<td>Fevereiro</td>
					<td>Rosangela Pontes da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>2.480/2020</td>
					<td>03-09-20</td>
				</tr>
				<tr>
					<td>273</td>
					<td>Fevereiro</td>
					<td>Francisco Pereira da Silva</td>
					<td>Idade</td>
					<td>Gari</td>
					<td>2.515/2020</td>
					<td>03-16-20</td>
				</tr>
				<tr>
					<td>274</td>
					<td>Fevereiro</td>
					<td>João Azevedo do Nascimento</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.516/2020</td>
					<td>03-16-20</td>
				</tr>
				<tr>
					<td>275</td>
					<td>Fevereiro</td>
					<td>Marilia Leite Vilas Boas</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.517/2020</td>
					<td>03-16-20</td>
				</tr>
				<tr>
					<td>276</td>
					<td>Fevereiro</td>
					<td>Leticia Maria Braga Felix</td>
					<td>Tempo de contribuição</td>
					<td>Professor Coordenador</td>
					<td>2.518/2020</td>
					<td>03-16-20</td>
				</tr>
				<tr>
					<td>277</td>
					<td>Fevereiro</td>
					<td>Maria Alzair Rodrigues Lima</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.519/2020</td>
					<td>03-16-20</td>
				</tr>
				<tr>
					<td>278</td>
					<td>Fevereiro</td>
					<td>Francisco Ivo de Oliveira</td>
					<td>Tempo de contribuição</td>
					<td>Motorista</td>
					<td>2.520/2020</td>
					<td>03-16-20</td>
				</tr>
				<tr>
					<td>279</td>
					<td>Fevereiro</td>
					<td>Antonio Ferreira dos Santos</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>2.521/2020</td>
					<td>03-16-20</td>
				</tr>
				<tr>
					<td>280</td>
					<td>Fevereiro</td>
					<td>Francisca dos Reis Santos</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.543/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>281</td>
					<td>Fevereiro</td>
					<td>Maria Luduina da Silva Ricardo</td>
					<td>Tempo de contribuição</td>
					<td>Merendeira</td>
					<td>2.544/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>282</td>
					<td>Fevereiro</td>
					<td>Sofia Maria Braga de Menezes</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.545/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>283</td>
					<td>Fevereiro</td>
					<td>Iris Maria Rodrigues Barbosa</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.546/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>284</td>
					<td>Fevereiro</td>
					<td>Ivo Lopes da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Supervisor Alimentar</td>
					<td>2.547/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>285</td>
					<td>Fevereiro</td>
					<td>Maria das Graças Cavalcante Lima</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.548/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>286</td>
					<td>Fevereiro</td>
					<td>Maria de Lourdes Alves de Oliveira Costa</td>
					<td>Tempo de contribuição</td>
					<td>Auxiliar de Escritorio</td>
					<td>2.549/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>287</td>
					<td>Fevereiro</td>
					<td>Maria Efisa Gomes da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.550/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>288</td>
					<td>Fevereiro</td>
					<td>José Israel Sobrinho</td>
					<td>Tempo de contribuição</td>
					<td>Motorista</td>
					<td>2.551/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>289</td>
					<td>Fevereiro</td>
					<td>Sebastião dos Santos Guedes</td>
					<td>Tempo de contribuição</td>
					<td>Motorista</td>
					<td>2.552/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>290</td>
					<td>Fevereiro</td>
					<td>Julia Albuquerque Santos</td>
					<td>Tempo de contribuição</td>
					<td>Inspetor de Alunos</td>
					<td>2.553/2020</td>
					<td>03-17-20</td>
				</tr>
				<tr>
					<td>291</td>
					<td>Fevereiro</td>
					<td>Maria Socorro de Lima</td>
					<td>Tempo de contribuição</td>
					<td>Servente-Continuo</td>
					<td>2.485/2020</td>
					<td>03-18-20</td>
				</tr>
				<tr>
					<td>292</td>
					<td>Fevereiro</td>
					<td>Raimunda Mendes Fontenele</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.486/2020</td>
					<td>03-18-20</td>
				</tr>
				<tr>
					<td>293</td>
					<td>Fevereiro</td>
					<td>Maria do Perpetuo Socorro Medeiros</td>
					<td>Tempo de contribuição</td>
					<td>Professor P2</td>
					<td>2.487/2020</td>
					<td>03-18-20</td>
				</tr>
				<tr>
					<td>294</td>
					<td>Fevereiro</td>
					<td>Maria do Socorro Porfirio da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Telefonista</td>
					<td>2.488/2020</td>
					<td>03-18-20</td>
				</tr>
				<tr>
					<td>295</td>
					<td>Fevereiro</td>
					<td>Marfiza Barros da Cruz</td>
					<td>Tempo de contribuição</td>
					<td>Inspetora de Aluno</td>
					<td>2.489/2020</td>
					<td>03-18-20</td>
				</tr>
				<tr>
					<td>296</td>
					<td>Fevereiro</td>
					<td>Terezinha Ferreira de Lima</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.490/2020</td>
					<td>03-18-20</td>
				</tr>
				<tr>
					<td>297</td>
					<td>Fevereiro</td>
					<td>Maria Cruz da Silva</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.491/2020</td>
					<td>03-18-20</td>
				</tr>
				<tr>
					<td>298</td>
					<td>Fevereiro</td>
					<td>Sebastiana Gomes Rodrigues</td>
					<td>Tempo de contribuição</td>
					<td>Gari</td>
					<td>2.492/2020</td>
					<td>03-18-20</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>QTD</td>
					<td>Mês</td>
					<td>Nome</td>
					<td>Aposentadoria</td>
					<td>Cargo</td>
					<td>Acórdão</td>
					<td>Data do Diário
					Eletrônico</td>
				</tr>
			</tfoot>
		</table>
	</div>
	<a class="nav-link btn-outline-primary btn mt-10" onClick="history.go(-1)" role="button" Style="width: 10%;cursor:pointer;"><i class="fa fa-arrow-circle-left"></i><span>Voltar</span></a>
	<br>
</div> -->
<?php include "rodape.php"; ?>