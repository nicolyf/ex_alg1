


import javax.swing.JOptionPane;
public class exercicio17{
	public static void main(String [] args){
		String profissao;

		profissao = JOptionPane.showInputDialog(null, "Informe a profiss�o de Tib�rcio:"+
		 "\n engenheiro \n programador \n m�dico \n advogado");
		char profissaoCHAR = profissao.charAt(0);

		switch (profissaoCHAR){
			case 'e':
				JOptionPane.showMessageDialog(null, "Tib�rcio � engenheiro!");
			break;

			case 'p':
				JOptionPane.showMessageDialog(null, "Tib�rcio � programador!");
			break;

			case 'm':
				JOptionPane.showMessageDialog(null, "Tib�rcio � m�dico!");
			break;

			case 'a':
				JOptionPane.showMessageDialog(null, "Tib�rcio � advogado!");
			break;

			case 'd':
				JOptionPane.showMessageDialog(null, "Tib�rcio � designer!");
			break;

			default:
				JOptionPane.showMessageDialog(null, "Tib�rcio � desempregado.");
			break;
		}
	}
}