import javax.swing.JOptionPane;
public class exercicio18{
	public static void main(String [] args){
		String nome, categoria;
		double preço, valor;
		int total;

		nome = JOptionPane.showInputDialog(null, "Insira seu nome");
		preço = Double.parseDouble(JOptionPane.showInputDialog(null, "Insira o preço do seu produto."));
		total = Integer.parseInt(JOptionPane.showInputDialog(null, "Seu produto pertence a que categoria? "
		+"\n 1- eletrodoméstico \n 2- utensílios de cozinha  \n 3 - joias \n 4- roupas \n 5 - sapatos"));

		switch (total){
			case 1:
				valor = preço - (preço * 0.1);
				JOptionPane.showMessageDialog(null,"O valor total é: "+valor);
			break;

			case 2:
				valor = preço - (preço * 0.15);
				JOptionPane.showMessageDialog(null,"O valor total é: "+valor);
			break;

			case 3:
				valor = preço - (preço * 0.20);
				JOptionPane.showMessageDialog(null,"O valor total é: "+valor);
			break;

			case 4:
				valor = preço - (preço * 0.25);
				JOptionPane.showMessageDialog(null,"O valor total é: "+valor);
			break;

			case 5:
				valor = preço - (preço * 0.50);
				JOptionPane.showMessageDialog(null,"O valor total é: "+valor);
			break;
		}
	}
}

