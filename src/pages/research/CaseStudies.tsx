import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import { TrendingUp, MapPin } from "lucide-react";

const CaseStudies = () => {
  const studies = [
    {
      title: "Wheat Yield Increase in Northern Plains",
      region: "North America",
      category: "Crop Solutions",
      result: "35% yield increase",
      description: "Implementation of our integrated crop nutrition program resulted in significant yield improvements while reducing water usage by 40%.",
    },
    {
      title: "Sustainable Vineyard Management",
      region: "Mediterranean",
      category: "Horticulture",
      result: "50% reduction in pesticide use",
      description: "Biological pest control and precision nutrition led to healthier vines and premium quality grapes.",
    },
    {
      title: "Dairy Farm Productivity Enhancement",
      region: "Australia",
      category: "Livestock",
      result: "25% increase in milk production",
      description: "Advanced nutrition supplements improved herd health and milk quality while reducing veterinary costs.",
    },
    {
      title: "Organic Vegetable Production",
      region: "Southeast Asia",
      category: "Pest Management",
      result: "90% pest control success",
      description: "Integrated pest management approach using biological controls achieved excellent results in organic certification.",
    },
    {
      title: "Fruit Orchard Regeneration",
      region: "South America",
      category: "Horticulture",
      result: "60% improvement in fruit quality",
      description: "Soil health restoration and precision nutrition transformed struggling orchards into thriving operations.",
    },
    {
      title: "Sustainable Cattle Ranching",
      region: "Africa",
      category: "Livestock",
      result: "40% reduction in disease incidents",
      description: "Preventive health program and improved nutrition led to healthier livestock and reduced antibiotic use.",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="py-16 bg-muted">
        <div className="container">
          <div className="max-w-3xl mx-auto text-center mb-12">
            <h1 className="text-4xl md:text-5xl font-bold mb-4">Case Studies</h1>
            <p className="text-xl text-muted-foreground">
              Real-world success stories from farmers around the globe
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {studies.map((study, index) => (
              <Card key={index} className="hover:shadow-lg transition-shadow">
                <CardHeader>
                  <div className="flex items-start justify-between mb-2">
                    <Badge variant="secondary">{study.category}</Badge>
                    <div className="flex items-center text-xs text-muted-foreground">
                      <MapPin className="h-3 w-3 mr-1" />
                      {study.region}
                    </div>
                  </div>
                  <CardTitle className="text-xl">{study.title}</CardTitle>
                  <CardDescription>{study.description}</CardDescription>
                </CardHeader>
                <CardContent>
                  <div className="flex items-center gap-2 text-accent font-semibold">
                    <TrendingUp className="h-5 w-5" />
                    <span>{study.result}</span>
                  </div>
                </CardContent>
              </Card>
            ))}
          </div>

          <div className="text-center mt-12">
            <p className="text-muted-foreground mb-6">
              Want to learn more about how our solutions can benefit your operation?
            </p>
            <div className="flex gap-4 justify-center">
              <Button asChild size="lg">
                <Link to="/contact">Request A Consultation</Link>
              </Button>
              <Button asChild variant="outline" size="lg">
                <Link to="/research/innovation">View Our Research</Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default CaseStudies;
