import javax.swing.JOptionPane;
public class exercicio18{
	public static void main(String [] args){
		String nome, categoria;
		double pre�o, valor;
		int total;

		nome = JOptionPane.showInputDialog(null, "Insira seu nome");
		pre�o = Double.parseDouble(JOptionPane.showInputDialog(null, "Insira o pre�o do seu produto."));
		total = Integer.parseInt(JOptionPane.showInputDialog(null, "Seu produto pertence a que categoria? "
		+"\n 1- eletrodom�stico \n 2- utens�lios de cozinha  \n 3 - joias \n 4- roupas \n 5 - sapatos"));

		switch (total){
			case 1:
				valor = pre�o - (pre�o * 0.1);
				JOptionPane.showMessageDialog(null,"O valor total �: "+valor);
			break;

			case 2:
				valor = pre�o - (pre�o * 0.15);
				JOptionPane.showMessageDialog(null,"O valor total �: "+valor);
			break;

			case 3:
				valor = pre�o - (pre�o * 0.20);
				JOptionPane.showMessageDialog(null,"O valor total �: "+valor);
			break;

			case 4:
				valor = pre�o - (pre�o * 0.25);
				JOptionPane.showMessageDialog(null,"O valor total �: "+valor);
			break;

			case 5:
				valor = pre�o - (pre�o * 0.50);
				JOptionPane.showMessageDialog(null,"O valor total �: "+valor);
			break;
		}
	}
}

