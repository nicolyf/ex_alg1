


import javax.swing.JOptionPane;
public class exercicio17{
	public static void main(String [] args){
		String profissao;

		profissao = JOptionPane.showInputDialog(null, "Informe a profissão de Tibúrcio:"+
		 "\n engenheiro \n programador \n médico \n advogado");
		char profissaoCHAR = profissao.charAt(0);

		switch (profissaoCHAR){
			case 'e':
				JOptionPane.showMessageDialog(null, "Tibúrcio é engenheiro!");
			break;

			case 'p':
				JOptionPane.showMessageDialog(null, "Tibúrcio é programador!");
			break;

			case 'm':
				JOptionPane.showMessageDialog(null, "Tibúrcio é médico!");
			break;

			case 'a':
				JOptionPane.showMessageDialog(null, "Tibúrcio é advogado!");
			break;

			case 'd':
				JOptionPane.showMessageDialog(null, "Tibúrcio é designer!");
			break;

			default:
				JOptionPane.showMessageDialog(null, "Tibúrcio é desempregado.");
			break;
		}
	}
}