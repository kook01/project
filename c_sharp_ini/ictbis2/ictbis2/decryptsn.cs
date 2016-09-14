using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ictbis2
{
    class decryptsn
    {
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
        public string[] data4Encrp { get; set; }

        /*
         * 1. Read data from ini file.
         * 2. splitdata all;
         * 2.1 splitdata to data year, month;
         * 2.2 splitdata to sn1 and sn2
         * 3. Create format for SN1
         * */
        public decryptsn()
        {
            //Read data from ini file
        }

                
        public void splitdataback(string paramsn_ictbis)
        {
            //081WE7E0RUX95211099
           // string tmp = "081WE7E0RUX95211099";
            string tmp = paramsn_ictbis;
            /*
            *splittmp[1] = tmp.Substring(5, 3); //Year
            splittmp[2] = tmp.Substring(11, 1); //Month
            splittmp[3] = tmp.Substring(17, 1); //Month
             * */
            this.data4Encrp = new string[tmp.Length];
            for (int count = 0; count < tmp.Length; count++)
            {
                this.data4Encrp[count] = tmp.Substring(count, 1);
            }
        }

        private void mergeData4YearMonth()
        {
            this.hexyear = this.data4Encrp[5] + this.data4Encrp[6] + this.data4Encrp[7];
            this.hexmonth = this.data4Encrp[11];
            string tmphexmonth = this.data4Encrp[17];
            this.dt_years = this.chgdec(hexyear);
            this.dt_months = this.chgdec(hexmonth);

        }

        private string chgdec(string hexValue)
        {
            int decValue = Convert.ToInt32(hexValue, 16);
            return decValue.ToString();
        }

        private void mergedata4SN1()
        {
            //Sequence data  W-10E-028915
            this.sn1 = this.data4Encrp[3] + "-" + this.data4Encrp[14] + this.data4Encrp[0] + this.data4Encrp[4] + "-";
            this.sn1 += this.data4Encrp[16] + this.data4Encrp[13] + this.data4Encrp[1] + this.data4Encrp[18] + this.data4Encrp[2]+ this.data4Encrp[12];
        }

        public void Showdataback(string paramencrp)
        {
            this.splitdataback(paramencrp);
            this.mergeData4YearMonth();
            this.mergedata4SN1();
        }
    }
}
