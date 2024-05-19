const LegalGroup = ({ title, desc }: { title: string; desc: string }) => {
  return (
    <>
      <h4 className="font-weight-bold text-md mb-3">{title}</h4>
      <p className="text-slate-400 mb-8 text-justify" dangerouslySetInnerHTML={{ __html: desc }} />
    </>
  );
};

export default LegalGroup;
