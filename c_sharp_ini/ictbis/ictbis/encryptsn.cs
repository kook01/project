using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Globalization;


namespace ictbis2
{
    class encryptsn
    {
        classini clsini = null;
        public string sn1 { get; set; }
        public string sn2 { get; set; }
        public string sn3 { get; set; }
        public string dts { get; set; }
        public string dt_years { get; set; }
        public string dt_months { get; set; }
        public string dt_days { get; set; }
        public string dt_hours { get; set; }
        public string dt_minutes { get; set; }
        public string dt_seconds { get; set; }
        public string hexyear { get; set; }
        public string hexmonth { get; set; }
        public string hexday { get; set; }
        public string hexhour { get; set; }
        public string hexminute { get; set; }
        public string hexsecond { get; set; }

        public string[] substring_sn1 { get; set; }
        public string[] substring_sn2 { get; set; }


        public encryptsn()
        {
            string[] tmpreturn = null;
            clsini = new classini();
            tmpreturn = clsini.readdata();
            this.sn1 = tmpreturn[0].Replace("-", "");
            this.sn2 = tmpreturn[1];
            this.sn3 = tmpreturn[2];
        }

        public void chkdatasn()
        {

        }

        public void createdt()
        {
            DateTime myDate = DateTime.Now;
            this.dts = myDate.ToString("yyyy-MM-dd HH:mm:ss", CultureInfo.CreateSpecificCulture("en-US"));

        }

        public void splitdt()
        {
            this.createdt();
            //Split date and time
            string[] dates = this.dts.Split(' ');
            //Split dates
            string[] d_now = dates[0].Split('-');
            this.dt_years = d_now[0];
            this.hexyear = this.chghex(this.dt_years);  //Convert to Hex
            this.dt_months = d_now[1];
            this.hexmonth = this.chghex(this.dt_months); //Convert to Hex
            this.dt_days = d_now[2];
            this.hexday = this.chghex(this.dt_days);  //Convert to Hex
            //split times 
            string[] t_now = dates[1].Split(':');
            this.dt_hours = t_now[0];
            this.hexhour = this.chghex(this.dt_hours);  //Convert to Hex
            this.dt_minutes = t_now[1];
            this.hexminute = this.chghex(this.dt_minutes); //Convert to Hex
            this.dt_seconds = t_now[2];
            this.hexsecond = this.chghex(this.dt_seconds); //Convert to Hex
        }

        public string showDat()
        {
            string return_tmp = string.Empty;
            return_tmp = substring_sn1[2] + substring_sn1[6] + substring_sn1[8] + substring_sn1[0] + substring_sn1[3];
            return_tmp += substring_sn2[0] + substring_sn2[3] + substring_sn2[5];
            return_tmp += substring_sn1[9] + substring_sn1[5] + substring_sn1[1];

            return return_tmp;
        }

        public string chghex(string param)
        {
            int tmpint = Int32.Parse(param);
            var zz = (tmpint << 2).ToString("X");
            return zz;
        }
        public void substringsn()
        {
            //Use all digit 0-->9
            string tmp = "W10E028915";
            int tmp3 = tmp.Length;
            this.substring_sn1 = new string[tmp3];
            for (int i = 0; i < tmp3; i++)
            {
                substring_sn1[i] = tmp.Substring(i, 1);
            }
        }

        public void substringsn2()
        {
            //Use only digit 0,3,5
            string tmp = "R91U4XU8";
            int tmp3 = tmp.Length;
            this.substring_sn2 = new string[tmp3];
            for (int i = 0; i < tmp3; i++)
            {
                substring_sn2[i] = tmp.Substring(i, 1);
            }
        }


        public string hex2binary(string hexvalue)
        {
            // Convert.ToUInt32 this is an unsigned int
            // so no negative numbers but it gives you one more bit
            // it much of a muchness 
            // Uint MAX is 4,294,967,295 and MIN is 0
            // this padds to 4 bits so 0x5 = "0101"
            return String.Join(String.Empty, hexvalue.Select(c => Convert.ToString(Convert.ToUInt32(c.ToString(), 16), 2).PadLeft(4, '0')));  //4
        }

        public string HexConverted(string strBinary)
        {
            string strHex2 = Convert.ToInt32(strBinary, 2).ToString("X");
            return strHex2;
        }

    }
}
