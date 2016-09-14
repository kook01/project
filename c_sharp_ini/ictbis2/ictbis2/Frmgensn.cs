using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Diagnostics;
namespace ictbis2
{
    public partial class frmgensn : Form
    {
        classini clsini = new classini();
        encryptsn ensn = new encryptsn();
        decryptsn desn = new decryptsn();
        public string tmpdatasn1 = string.Empty;
        public string tmpdatasn_ictbis = string.Empty;
        public string[] dataexpress = null;
        public frmgensn()
        {
            InitializeComponent();
            showdatafirst();

        }

        private void showdatafirst()
        {
            
            dataexpress = clsini.readdatatxtfile();
            // Read data SN1 from text file(Serial.TXT) to show in textbox
            tmpdatasn1 = dataexpress[0];  
            txtboxexpresssn.Text = tmpdatasn1;
            //Read data from data Encrpt to textbox
            tmpdatasn_ictbis = clsini.IniReadValue("SN_ictbis", "SN");
            txtboxdataencrpt.Text = tmpdatasn_ictbis.Trim().ToString();
       }

        private void btnchkgenini_Click(object sender, EventArgs e)
        {
            classini clsini = new classini();
            string[] abc = new string[3];
            abc = clsini.readdatatxtfile();
            Debug.Print("data 1 is " + abc[0]);
            Debug.Print("data 2 is " + abc[1]);
            Debug.Print("data 3 is " + abc[2]);
        }

        private void btnFileTxt_Click(object sender, EventArgs e)
        {
            encryptsn ensn = new encryptsn();
            Debug.Print("data 1 is " + ensn.sn1);
            Debug.Print("data 2 is " + ensn.sn2);
            Debug.Print("data 3 is " + ensn.sn3);
            ensn.splitdt();
            Debug.Print("data year(Hex) is " + ensn.hexyear);
            Debug.Print("data month(Hex) is " + ensn.hexmonth);
            int abc = ensn.chgdec(ensn.hexyear);
            Debug.Print("data back to year(Decimal) is " + abc);

            Debug.Print("Data Encrpt is " + ensn.EncrptData());
        }

        private void button1_Click(object sender, EventArgs e)
        {
            //W10E028915
            string tmp = "081WE7E0RUX95211099";
            int abc = tmp.Length;
            Debug.Print("length is " + abc);
            string[] splittmp = null;


            splittmp = new string[abc];
            for (int i = 0; i < abc; i++)
            {
                splittmp[i] = tmp.Substring(i, 1);
                Debug.Print("order:" + i + " data of " + tmp + " is " + splittmp[i]);
            }

        }

        private void button2_Click(object sender, EventArgs e)
        {
            ensn.splitdt();
            Debug.Print("Data original is W-10E-028915 ");
            Debug.Print("Data Encrpt is " + ensn.EncrptData());
            desn.Showdataback();
            Debug.Print("Data back to original is " + desn.sn1);
            desn.mergeData4YearMonth();
            Debug.Print("Data year is " + desn.dt_years + " and month is " + desn.dt_months);
        }

        private void button3_Click(object sender, EventArgs e)
        {
            if (clsini.IniWriteValue("SN_Express", "SN", tmpdatasn1))
            {
                //
            }
            else
            {
                label4.Text = "ไม่สามารถเพิ่มข้อมูลได้";
            }
            ensn.splitdt();
            txtboxdataencrpt.Text = ensn.EncrptData();
            if (clsini.IniWriteValue("SN_ictbis", "SN", ensn.EncrptData()))
            {
                //
            }
            else
            {
                label4.Text = "**** ไม่สามารถเพิ่มข้อมูลได้";
            }

        }

        private void button4_Click(object sender, EventArgs e)
        {
            desn.Showdataback();
            txtboxdatadecrpt.Text = desn.sn1;
        }

        private void frmgensn_Load(object sender, EventArgs e)
        {
            //this.MaximumSize = new Size(486,224);
        }

        private void btnexit_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("Exit application?", "ออกจากโปรแกรม", MessageBoxButtons.YesNo, MessageBoxIcon.Exclamation) == DialogResult.Yes)
            {
                Application.Exit(); //comment
                //comment2
            }
            else
            {
            }
        }
    }
}
