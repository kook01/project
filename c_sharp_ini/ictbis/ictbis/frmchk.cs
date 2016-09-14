using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.IO;
using System.Globalization;
using System.Diagnostics;

namespace ictbis2
{
    public partial class frmchk : Form
    {
        classini clsini = null;
        //   readtxtfile rtxtfile = null;
        public string txtfilename { get; set; }
        public string pathinifile { get; set; }

        public frmchk()
        {
            InitializeComponent();
            initialini();
        }


        private void initialini()
        {
            // this.txtfilename = clsini.IniReadValue("serialname", "path");
            clsini = new classini();
            //   rtxtfile = new readtxtfile("confgsn");


        }

        private void btnchk_Click(object sender, EventArgs e)
        {
            string directory = AppDomain.CurrentDomain.BaseDirectory;
            // MessageBox.Show("data is " + directory);


            //  classini clsini = new classini("confgsn");
            if (clsini.CreateInifile())
            {
                MessageBox.Show("create file completed.");
            }
            else
            {
                MessageBox.Show("Files exists.");
            }


            //Generrate file path serial.txt
            //Write data
            if (clsini.IniWriteValue("serialname", "path", "Serial.TXT"))
            {
                MessageBox.Show("insert data completed");
            }
            else
            {
                MessageBox.Show("insert data not completed");
            }


            //Read data
            string readdata = string.Empty;
            readdata = clsini.IniReadValue("serialname", "path");
            txtboxsn.Text = readdata.Trim().ToString();

            //Write data
            if (clsini.IniWriteValue("serialNumber2", "snis", "xxxxxxxxeeeeeeeeeeeee"))
            {
                MessageBox.Show("insert data completed");
            }
            else
            {
                MessageBox.Show("insert data not completed");
            }
        }

        private void btnreadtxtfile_Click(object sender, EventArgs e)
        {
            //  string directory = AppDomain.CurrentDomain.BaseDirectory;
            ////  string tmppath = directory + "\\Serial.TXT";
            //  classini clsini = new classini("confgsn");
            //  if (clsini.CreateInifile())
            //  {
            //      MessageBox.Show("create file completed.");
            //  }
            //  else
            //  {
            //      MessageBox.Show("Files exists.");
            //  }
            //  string readdata = clsini.IniReadValue("serialname", "path");
            //  string tmppath = directory + "\\" + readdata;
            //  MessageBox.Show("data txt is " + tmppath);
            //  //string text = File.ReadAllText(tmppath, Encoding.UTF8);  //This result is txt sequency
            //  //MessageBox.Show("data txt is " + text);
            //  string[] lines = File.ReadAllLines(tmppath, Encoding.UTF8);  //This result is txt array
            //  //MessageBox.Show("Length is " + lines[2].Length);
            //  MessageBox.Show("data line is " + lines[0]);

            //  readtxtfile rtxtfile = new readtxtfile("confgsn");
            //string[] lines = clsini.readdata();
            //MessageBox.Show("data line is " + lines[2]);
            encryptsn ensn = new encryptsn();
            ensn.chkdatasn();
            MessageBox.Show("data sn3 is " + ensn.sn3);
            Debug.Print("data sn3 is " + ensn.sn3);



        }

        private void btdt_Click(object sender, EventArgs e)
        {
            //DateTime myDate2 = DateTime.Now;
            //var date1 = myDate2.ToString("yyyy-MM-dd HH:mm:ss", CultureInfo.CreateSpecificCulture("en-US"));

            //string[] dates = date1.Split(' ');
            //MessageBox.Show("Today(Date) is " + dates[0] + " and Today(Time) is " + dates[1]);

            ////split dates
            //string[] d_now = dates[0].Split('-');
            //MessageBox.Show("Today(year) is " + d_now[0] + " and Today(month) is " + d_now[1] + " and Today(day) is " + d_now[2]);
            ////split time
            //string[] t_now = dates[1].Split(':');
            //MessageBox.Show("Today(hours) is " + t_now[0] + " and Today(minute) is " + t_now[1] + " and Today(sec) is " + t_now[2]);
            encryptsn ensn = new encryptsn();
            ensn.splitdt();
            //replace sn1 with ""
            string tmpensn1 = ensn.sn1.Replace("-", "");
            string showtxt = "data sn1: " + ensn.sn1 + " and data sn1: " + ensn.sn2 + " and data sn1: " + ensn.sn3 + " and replase is " + tmpensn1;
            MessageBox.Show(showtxt);




            DateTime startDate = new DateTime(2016, 09, 1);
            DateTime endDate = new DateTime(2016, 09, 30);

            TimeSpan diff = endDate - startDate;
            int days = diff.Days;
            int j = 0;
            for (var i = 0; i <= days; i++)
            {
                var testDate = startDate.AddDays(i);
                if (testDate.DayOfWeek != DayOfWeek.Saturday && testDate.DayOfWeek != DayOfWeek.Sunday)
                {
                    j = j + 1;
                    Debug.Print(testDate.ToShortDateString());
                }
            }
            Debug.Print(string.Format("Total Days:{0}", j));


        }

        private void btnshl_Click(object sender, EventArgs e)
        {
            //string tmp1 = txtboxreal.Text;
            string tmp1 = "W10E028915";
            char[] values = tmp1.ToCharArray();
            var lengthtmp1 = tmp1.Length;
            Debug.Print("Length tmp1 is " + lengthtmp1);
            foreach (char letter in values)
            {
                // Get the integral value of the character.
                int value = Convert.ToInt32(letter);
                // Convert the decimal value to a hexadecimal value in string form.
                string hexOutput = String.Format("{0:X}", value);
                Debug.Print("Hexadecimal value of {0} is {1}", letter, hexOutput);
            }
            //Debug.Print("msit04");

        }

        private void btnshr_Click(object sender, EventArgs e)
        {
            //int tmpint = Int32.Parse(txtboxreal.Text.Trim().ToString());
            //int z = tmpint << 2;
            //var zz = z.ToString("X");

            //Gen datetime to Hex
            int tmpint = Int32.Parse(txtboxreal.Text.Trim().ToString());
            var zz = (tmpint << 2).ToString("X");



            //var zz = txtboxreal.Text.Trim().ToString();
            int decValue = (int.Parse(zz, System.Globalization.NumberStyles.HexNumber))>>2; 
           // int decValue = (Convert.ToInt32(zz, 16))>>2;
            //Debug.Print("data shift left is " + z + " and right shift is " + x);
            Debug.Print("***************Hex**********************************");
            Debug.Print("data Hex shift left is " + zz);
            Debug.Print("Reverse back to original is " + decValue);
        }

        private void btnEncrp_Click(object sender, EventArgs e)
        {
            encryptsn ensn = new encryptsn();
           // ensn.substringsn2();

            //string tmp2 = string.Empty;
            //Debug.Print("data is " + ensn.sn1);
            //tmp = ensn.substringsn();
            //Debug.Print("data substring is " + tmp);



           // string tmp = "R91U4XU8";
           //// 
           // int tmp3 = tmp.Length;
           // string[] tmpsplitsn = new string[tmp3];
           // for (int i = 0; i < tmp3; i++)
           // {
                 
           //     Debug.Print("order:" + i + " data substring is " + ensn.substring_sn2[i]);
           //     //tmpsplitsn[i] = tmp.Substring(i, 1);
           //     //Debug.Print("order:" + i +" data substring is " + tmpsplitsn[i] + " and have length is " + tmp3);
           // }


            ensn.splitdt();
            Debug.Print("Hex of year 2016 is " + ensn.hexyear);

            

        }

        private void btndecrpt_Click(object sender, EventArgs e)
        {
            string abc = string.Empty;
            string tmp2 = "3C"; //3C  1f80
            encryptsn ensn = new encryptsn();
            //
            /* pass */
            var tmp = ensn.hex2binary(tmp2);
            Debug.Print("binary of hex(" + tmp2 + ") is " + tmp);
            /* pass */
            string back2hex = ensn.HexConverted(tmp);
            Debug.Print("binary(" + tmp + ") back2hex is " + back2hex);

            //Use Padding
            Debug.Print("***********Using Pad data************");
            string pad1 = "1f80";
            string pad2 = Convert.ToString(Int32.Parse(textBox1.Text), 2);
            //string pad2 = Convert.ToString(2, 2);
            Debug.Print("data pad2 is " + pad2);
            pad2 = pad2.PadLeft(16, '0');
            Debug.Print("data Left pad2 is " + pad2);
            string back2hexs = ensn.HexConverted(pad2);
            Debug.Print("binary(" + pad2 + ") back2hex is " + back2hexs);
            Debug.Print("***********Process back to start data Using Pad data************");
            Debug.Print("********Hex to binary***************");
            var tmps = ensn.hex2binary(back2hexs);
            Debug.Print("binary of hex(" + back2hexs + ") is " + tmps);
            Debug.Print("********Pad right***************");
            pad2 = tmps.PadRight(16, '0');
            Debug.Print("Pad right is " + pad2);
            string back2hexss = ensn.HexConverted(pad2);
            Debug.Print("binary(" + pad2 + ") back2hex is " + back2hexss);

            /* not pass */
            //Shift bit
            //long tmp3 = (Int64.Parse(tmp) << 2);  //(tmp << 2);
            //Debug.Print("binary(" + tmp + ") shift2digit is " + tmp3);
           
            //var tmp5 = tmp3.ToString();
            //Debug.Print("data tmp5 is " + tmp5);
            //string back2hex2 = ensn.HexConverted(tmp5);
            //Debug.Print("binary(" + tmp5 + ")  back2hex is " + back2hex2);
            //
            //string tmp4 = tmp3.ToString();
            //string back2hex_again = ensn.HexConverted(tmp4);
            //Debug.Print("binary(" + tmp4 + ") back2hex is " + back2hex); 
            



        }

        private void button1_Click(object sender, EventArgs e)
        {
            encryptsn ensn = new encryptsn();

            string tmp2 = "3C"; //3C  1f80
            ////var tmp = ensn.hex2binary(tmp2);
            //Supported bases are 2, 8, 10 and 16
            String result = Convert.ToString(Convert.ToInt32(tmp2, 16), 2);
            Debug.Print("binary of hex(" + tmp2 + ") is " + result);
            Int64 tmp = Int64.Parse(ensn.hex2binary(tmp2));
            Debug.Print("binary of hex(" + tmp2 + ") is " + tmp);
            Int64 tmp_add = tmp ^ 1;
            Debug.Print("binary add is " + tmp_add);
            //string back2hex = ensn.HexConverted(tmp_add);
            //Debug.Print("binary(" + tmp_add + ") back2hex is " + back2hex);
            //var tmp_minus = tmp_add - 1100;


            int x = 0;
            int y = 0;

            PrintXOR(x, y);

            x = 1; y = 0;
            PrintXOR(x, y);

            x = 0; y = 1;
            PrintXOR(x, y);

            x = 1; y = 1;
            PrintXOR(x, y);

        }

        private static void PrintXOR(int x, int y)
        {
            Debug.Print("x = {0}; y = {1}; Result {2}", x, y, x ^ y);
        }
    }
}
